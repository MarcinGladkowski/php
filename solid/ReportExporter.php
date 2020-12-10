<?php declare(strict_types=1);

class ReportExporter
{
    public function export(Report $report, WriterInterface $writer)
    {
        $writer->init();
        foreach ($report->fetch() as $row) {
            $writer->write($row);
        }
        $writer->finish();
    }
}
