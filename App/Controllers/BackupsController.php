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
    public $output = "";

    public function admin_index()
    {

    }
    public function admin_save()
    {
        if($this->Request->isPost AND (isset($this->Request->data->file) OR isset($this->Request->data->database)))
        {
            set_time_limit(240);
            $post = $this->Request->data;

            $directory ='../../Backups/'.date('Y.m.d-H.i.s').'/';
            mkdir($directory);

            if(isset($post->database) && $post->database)
                $this->saveDb($directory);

            if(isset($post->file) && $post->file)
                $this->saveFiles($directory);

            $this->output .= 'Sauvegarde terminée!';
            $d["log"] = $this->output;
            $this->set($d);
        }


    }
    private function saveDb($dir)
    {
        $this->output .= 'Sauvegarde de la base MySQL...<br />';
        $export = $this->Backup->exportDB();
        $this->output .= 'Ecriture du fichier SQL...<br/>';
        $file = fopen($dir.'backup_database.sql', 'w');
        fwrite($file, $export);
        fclose($file);
        $this->output .= 'Sauvegarde de la base de données terminée!<br /><br />';

    }
    private function saveFiles($dir)
    {
        $this->output .= 'Sauvegarde des fichiers...<br />';
        $this->output .= 'Listage des fichiers à sauvegarder...<br />';
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
        $this->output .= 'Listage terminé!<br />';
        $this->output .= 'Création de l\'archive...<br />';

        $zip->close();
        $this->output .= 'Sauvegarde des fichiers terminé!<br /><br />';

    }
}