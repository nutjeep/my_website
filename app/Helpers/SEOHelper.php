<?php

namespace App\Helpers;

class SEOHelper {
   public   $cannonical,
            $keywords,
            $description;

   public function __construct(  $cannonical = "",
                                 $keywords = "fullstack developer, backend developer, website developer, jasa pembuatan website, jasa pembuatan website murah, surabaya, tulungagung",
                                 $description = "Jasa pembuatan website dengan pengalaman mengerjakan berbagai jenis website untuk kebutuhan  bisnis / perusahaan Anda. Website yang responsive, secure, seo friendly dan berorientasi kepada hasil akhir yang maksimal."
                              )
   {
      $this->cannonical   = $cannonical;
      $this->keywords     = $keywords;
      $this->description  = $description;
   }
}