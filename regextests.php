<?php 

$diviExtract = new diviContentExtractor;


$diviExtract->setFileContents();

$matches = $diviExtract->getFirstMatchSet();

if($matches){
    print_r($matches);
}else{
    echo "Nothing";
}

class diviContentExtractor{

    public $contents;


    public function setFileContents($path = 'divicode.txt'){
        $this->contents = file_get_contents($path);
    }

    /*
     returns 
    */
    public function getFirstMatchSet(){

        /*
        Find occurrences of  [et_pb_section
        */
            
        if (preg_match_all('/\[et_pb_section(.*?)\[\/et_pb_section/s',$this->contents, $matches)) {
            return $matches;
        }
        
    }
}
 
