 <?php 

class prajwol{
    public function first(){
        echo "This is the first function\n";
        return $this;
    }
    public function second(){
        echo "This is the second function\n";
        return $this;
    }
    public function third(){
        echo "This is the third function\n";
    }
}

$demo = new prajwol();
$demo ->first()->second()->third();


?>