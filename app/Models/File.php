<?php

namespace Models;

use System\CheckManager;

class File
{
    const PATH_UPLOAD = ROOT . '/app/storage/upload';
    const PATH_BACKUP = ROOT . '/app/storage/backup';

    public function createBackup()
    {
        $toDay = date("Y-m-d H:i:s", time());
        $filesList = [];

        if (!file_exists(self::PATH_BACKUP)) {
            mkdir(self::PATH_BACKUP, 0777, true);
        }

        $files =  array_diff(scandir(self::PATH_UPLOAD), ['..', '.']);



        if (!empty($files)) {
            foreach ($files as $nameFile) {
                $pathToFile = sprintf('%s/%s', self::PATH_UPLOAD, $nameFile);

                if (file_exists($pathToFile)) {
                    $dateEditFile = date("Y-m-d H:i:s", filectime($pathToFile));
                    $dataForBackup = date("Y-m-d H:i:s", strtotime('+10 hours', strtotime($dateEditFile)));
                    // $dataForBackup = date("Y-m-d H:i:s", strtotime('+3 days', strtotime($dateEditFile)));


                    if ($toDay > $dataForBackup) {
                        if (!file_exists(sprintf('%s/%s.bak', self::PATH_BACKUP, $nameFile))) {
                            if (!copy($pathToFile, sprintf('%s/%s.bak', self::PATH_BACKUP, $nameFile))) {
                                return ['status' => 'movement_problem'];
                            } else {
                                $filesList[] = $nameFile;
                            }
                        }
                    }
                }
            }

            return ['status' => 'ok_files', 'files' => $filesList];
        }

        return ['' => 0];
    }
}
