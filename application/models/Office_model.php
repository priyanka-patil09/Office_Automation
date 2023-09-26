<?php
  class Office_model extends CI_Model {
    public function __construct()
      {
          $this->load->database();
      }
  


      // Forms DataModel

      public function insert($model)
      {
        return $this->db->insert('status_master',$model);
      } 

      public function insert1($model)
      {
        return $this->db->insert('remainder_master',$model);
      } 

      public function insert2($model)
      {
        return $this->db->insert('priority_master',$model);
      } 

      public function insert3($model)
      {
        return $this->db->insert('task_master',$model);
      } 

      public function insert4($model)
      {
        return $this->db->insert('billing_master',$model);
      }
      
      public function insert5($model)
      {
        return $this->db->insert('projaccess_master',$model);
      }

      public function insert6($model)
      {
        return $this->db->insert('budget_master',$model);
      }

      public function insert7($model)
      {
        return $this->db->insert('projtype_master',$model);
      }

      public function insert8($model)
      {
        return $this->db->insert('tags_master',$model);
      }
  



      
    // Table DataModel


      public function getallStatus()
      {   
            $this->db->select("status_master.StatusId,status_master.StatusName,status_master.ColorCode");
            $this->db->from('status_master');
            $this->db->where('is_active','1');          
            $query = $this->db->get();
            return $query->result();
      }


      public function getallRemainder()
      {   
            $this->db->select("remainder_master.RemainId,remainder_master.RemainName");
            $this->db->from('remainder_master');
            $this->db->where('is_active','1');          
            $query = $this->db->get();
            return $query->result();
      }


      public function getallPriority()
      {   
            $this->db->select("priority_master.PrioId,priority_master.PrioName");
            $this->db->from('priority_master');
            $this->db->where('is_active','1');          
            $query = $this->db->get();
            return $query->result();
      }


      public function getallTask()
      {   
            $this->db->select("task_master.TaskId,task_master.TaskName");
            $this->db->from('task_master');
            $this->db->where('is_active','1');          
            $query = $this->db->get();
            return $query->result();
      }


      public function getallBilling()
      {   
            $this->db->select("billing_master.BillId,billing_master.BillName");
            $this->db->from('billing_master');
            $this->db->where('is_active','1');          
            $query = $this->db->get();
            return $query->result();
      }


      public function getallProjAcc()
      {   
            $this->db->select("projaccess_master.ProjAccId,projaccess_master.ProjAccName");
            $this->db->from('projaccess_master');
            $this->db->where('is_active','1');          
            $query = $this->db->get();
            return $query->result();
      }


      public function getallBudget()
      {   
            $this->db->select("budget_master.BudgetId,budget_master.BudgetName");
            $this->db->from('budget_master');
            $this->db->where('is_active','1');          
            $query = $this->db->get();
            return $query->result();
      }


      public function getallProjType()
      {   
            $this->db->select("projtype_master.ProjTypeId,projtype_master.ProjTypeName");
            $this->db->from('projtype_master');
            $this->db->where('is_active','1');          
            $query = $this->db->get();
            return $query->result();
      }


      public function getallTags()
      {   
            $this->db->select("tags_master.TagsId,tags_master.TagsName");
            $this->db->from('tags_master');
            $this->db->where('is_active','1');          
            $query = $this->db->get();
            return $query->result();
      }
     
      
}