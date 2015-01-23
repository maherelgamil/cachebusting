<?php namespace Maherelgamil\Cachebusting;

use Illuminate\Support\Facades\File;

/**
 *
 * @author maherbusnes@gmail.com
 *
 */
class Cachebusting
{


    /**
     * Get url with cache busting
     *
     * @param $url
     * @return string
     */
    public function url($url)
    {
        if($this->fileExists($url))
        {
            return  $this->urlGenerate($url);
        }

    }


    /**
     * Check if file exists
     *
     * @param $url
     * @return bool
     */
    protected function fileExists($url)
    {
        return File::exists($url) ? true : false ;
    }


    /**
     * get last file modified  time
     *
     * @param $url
     * @return int
     */
    protected  function fileTime($url)
    {
        return fileatime($url);
    }

    /**
     * Generate file version
     *
     * @param $url
     * @return string
     */
    protected function version($url)
    {
        return md5($this->fileExists($url));
    }

    /**
     * Url Generator
     *
     * @param $url
     * @return string
     */
    protected function urlGenerate($url)
    {
        return $url .'?v='.$this->version($url);
    }


}
