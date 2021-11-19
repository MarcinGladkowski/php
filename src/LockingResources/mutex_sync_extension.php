<?php

class DailyReportWriter {

    protected $mutex = 'DailyReport';

    public function appendData(array $data) : void {
        $filename = './report-' . date('Y-m-d') . '.txt';
        $fh = fopen($filename, 'a');
        $mutex = new \SyncMutex($this->mutex);
        $mutex->lock();
        foreach ($data as $row) {
            fputcsv($fh, $row);
        }
        fclose($fh);
        $mutex->unlock();
    }
}
$writer = new DailyReportWriter();
$writer->appendData(['name' => 'Marcin']);