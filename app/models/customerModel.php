<?php
/**
 * customer model
 */
class customerModel extends BaseModel{
    private $name;
    private $email;
    private $phone;
    private $nid;
    private $dob;
    private $physicalAddress;
    private $id;

    public function __construct($id="",$name="",$email="",$phone="",$dob="",$physicalAddress="",$nid=""){
        parent::__construct();
        $this->nid = $nid;
        $this->name = $name;
        $this->physicalAddress = $physicalAddress;
        $this->id = $id;
        $this->dob = $dob;
        $this->phone = $phone;
        $this->email = $email;
    }

    public function save(){
        try{
        $stm = $this->db->prepare("INSERT INTO customers(name,physicalAddress,dob,phone,email,nid)values(?,?,?,?,?,?)");

        $result = $stm->execute([$this->name, $this->physicalAddress,$this->dob,$this->phone,$this->email,$this->nid]);
        return ["status"=>"success","message"=>$this->db->lastInsertId()];
        }
        catch(Exception $e){
            return ["status"=>"error","message" =>$e->getMessage()];
        }
    }

    public function update(){

    }

    public function getAll(){
        try{
        $stm = $this->db->prepare("SELECT * FROM customers");
        $result = $this->stm->execute();
        return $result->fetch(PDO::FETCH_OBJ);
        }catch(Exception $e){
            return $e->getMessage();
        }
    }

    public function getById(){

    }

    public function delete(){

    }
}
?>