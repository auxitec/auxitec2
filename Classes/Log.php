<?php
class Log
{
    public static function LogWrite($data)
    {
        $directory = "/logs/";
        $file = date('Y-m-d') . ".log";
        $path = dirname(__DIR__) . $directory . $file;
        $data = date("H:i:s") . " "  . $data;
        $handle = fopen($path, "a");                // a ouvre en ecriture et en append
                                                          // w pointeur au début
                                                          // c gestion des verrous en cas d'ecriture simultanée

        if (flock($handle, LOCK_EX)){               // LOCK_EX   Verrou exclusif
            fwrite($handle, $data . PHP_EOL);         // PHP_EOL = End of line
            flock($handle, LOCK_UN);               //  LOCK_UN Unlock
            fclose($handle);
        }

    }
}