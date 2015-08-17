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

    }
    public function admin_save($files = true, $db = true)
    {
        $this->needRender = false;
        if($db OR $files)
        {
            set_time_limit(240);
            $directory ='../../Backups/'.date('Y.m.d-H.i.s').'/';
            mkdir($directory);

            if($db)
                $this->saveDb($directory);

            if($files)
                $this->saveFiles($directory);

            print('Sauvegarde terminée!');
        }


    }
    private function saveDb($dir)
    {
        $export = $this->Backup->exportDB();
        print('Ecriture du fichier SQL...<br/>');
        $file = fopen($dir.'backup_database.sql', 'w');
        fwrite($file, $export);
        fclose($file);
        print('Sauvegarde de la base de données terminée!<br /><br />');

    }
    private function saveFiles($dir)
    {
        print('Sauvegarde des fichiers...<br />');
        print('Listage des fichiers à sauvegarder...<br />');
        $rootPath = dirname(dirname(getcwd()));
        $name = 'backup_files.zip';

        $zip = new \ZipArchive();
        $zip->open($dir.$name, \ZipArchive::CREATE | \ZipArchive::OVERWRITE);

        $files = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($rootPath),
            \RecursiveIteratorIterator::LEAVES_ONLY
        );

        foreach ($files as $name => $file)
        {
            if (!$file->isDir() AND strpos($file->getFilename(), 'backup_') === false)
            {
                $filePath = $file->getRealPath();
                $relativePath = substr($filePath, strlen($rootPath) + 1);

                $zip->addFile($filePath, $relativePath);
            }
        }
        print('Listage terminé!<br />');
        print('Création de l\'archive...<br />');

        $zip->close();
        print('Sauvegarde des fichiers terminé!<br /><br />');

    }
}