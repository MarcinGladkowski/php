<?php declare(strict_types=1);

interface WriterInterface
{
    public function init();
    public function write(ReportRow $row);
    public function finish();
}
