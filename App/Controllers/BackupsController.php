<?php
/**
 * Created by PhpStorm.
 * User: Floca
 * Date: 16/08/15
 * Time: 11:44
 */

namespace App\Controllers;


use Core\Lib\Debug;

class BackupsController extends AppController
{
    public function admin_index()
    {
        @apache_setenv('no-gzip', 1);
        @ini_set('zlib.output_compression', 0);
        @ini_set('implicit_flush', 1);

        print('<!DOCTYPE html><html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>Sauvegarde ...</title></head><body>');
        $this->needRender = false;
        $rootPath = dirname(dirname(getcwd()));
        set_time_limit(240);
        print('Initialisation ...<br />');
        ob_flush();
        flush();
        $name = 'backup_'.date('Y.m.d_H.i.s').'.zip';
        $record = new \stdClass();
        $record->file = $name;
        $record->date = date('Y-m-d H:i:s');
        print('Prêt!<br />');
        ob_flush();
        flush();
        print('Listage des fichiers à sauvegarder...<br />');
        ob_flush();
        flush();
        $zip = new \ZipArchive();
        $zip->open('files/backups/'.$name, \ZipArchive::CREATE | \ZipArchive::OVERWRITE);

// Create recursive directory iterator
        /** @var SplFileInfo[] $files */
        $files = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($rootPath),
            \RecursiveIteratorIterator::LEAVES_ONLY
        );

        foreach ($files as $name => $file)
        {
            // Skip directories (they would be added automatically)
            if (!$file->isDir() AND strpos($file->getFilename(), 'backup_') === false)
            {
                // Get real and relative path for current file
                $filePath = $file->getRealPath();
                $relativePath = substr($filePath, strlen($rootPath) + 1);

                // Add current file to archive
                $zip->addFile($filePath, $relativePath);
                //echo 'Fichier ajouté : '.$filePath . '<br>';
            }
        }
        print('Listage terminé!<br />');
        ob_flush();
        flush();
        print('Création de l\'archive...<br />');
        ob_flush();
        flush();
        $zip->close();
        print('Archive terminée!<br />');
        $this->Backup->create($record);
        print("</body></html>");
    }
}