<?php namespace Maherelgamil\Cachebusting;


/**
 *
 * @author maherbusnes@gmail.com
 *
 */
class Cachebusting
{


    /**
     * Get Url with version
     *
     * @param $path
     * @return string
     * @throws LogicException
     */
    function url($path)
    {

        if ( ! file_exists($this->getRealPath($path))) {
            throw new LogicException("File not found at [{$this->getRealPath($path)}]");
        }

        return asset($this->bustQuery($path));
    }


    /**
     * get Real Path
     *
     * @param $path
     * @return string
     */
    protected function getRealPath($path)
    {
        return public_path($path);
    }


    /**
     * Get last file modified time and md5 it
     *
     * @param $path
     * @return string
     */
    protected function getFileTime($path)
    {
        return md5(filemtime($this->getRealPath($path)));
    }


    /**
     * Bust cache version with path
     *
     * @param $path
     * @return string
     */
    protected function bustQuery($path)
    {
        return $path .'?'. $this->getFileTime($path);
    }


}
