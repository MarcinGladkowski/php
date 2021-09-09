<?php declare(strict_types=1);

class AnnotationReader
{
    public $routes;

    /**
     * @throws ReflectionException
     */
    public function parse(string $className)
    {
        $annotationRegex = '/@([a-zA-Z0-9\\\]+)\((.*)\)/';
        $refClass = new ReflectionClass($className);

        foreach ($refClass->getMethods() as $method) {
            $comments = $method->getDocComment();

            foreach (explode("\n", $comments) as $line) {
                preg_match($annotationRegex, $line, $matches);

                if (count($matches)) {
                    $this->routes[] = new $matches[1](
                        str_replace(['"', '"'], '', $matches[2]),
                        [new $className(), $method->getName()]
                    );
                }
            }
         }
    }
}