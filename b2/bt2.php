<?php
    class tinh
    {
        var $n1, $n2;
        function __construct($n1, $n2)
        {
            $this->n1 = $n1;
            $this->n2 = $n2;
        }
        function cong(){
            return $this->n1+$this->n2;
        }
        function tru(){
            return $this->n1-$this->n2;
        }
        function nhan(){
            return $this->n1*$this->n2;
        }
        function chia(){
            return $this->n1/$this->n2;
        }
    }
    if(isset($_POST['submit'])){
       
        $x = $_POST['tinh'];
        $y = new tinh($_POST['one'], $_POST['two']);
        $ketqua =  0;
        if($x == "cong"){
            $ketqua = $y->cong();
        }elseif($x == 'tru'){
            $ketqua = $y->tru();
        }elseif($x == 'nhan'){
            $ketqua = $y->nhan();
        }else{
            $ketqua = $y->chia();
        }
        echo $ketqua;
        // var_dump($ketqua);
    }

?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <p>NumOne</p>
    <input type="text" name="one" required>
    <p>NumTwo</p>
    <input type="text" name="two" required>
    <p>Calculate</p>
    <select name="tinh">
        <Option value="cong">add</Option>
        <Option value="tru">minus</Option>
        <Option value="chia">devide</Option>
        <Option value="nhan">multiple</Option>
    </select>
    <button type="submit" name="submit">tinh</button>
</form>