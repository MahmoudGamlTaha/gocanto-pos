<?php

class module extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_module_name($module_id)
    {
        $query = $this->db->get_where('modules', ['module_id' => $module_id], 1);

        if ($query->num_rows() == 1) {
            $row = $query->row();

            return $this->lang->line($row->name_lang_key);
        }

        return $this->lang->line('error_unknown');
    }

    public function get_module_desc($module_id)
    {
        $query = $this->db->get_where('modules', ['module_id' => $module_id], 1);
        if ($query->num_rows() == 1) {
            $row = $query->row();

            return $this->lang->line($row->desc_lang_key);
        }

        return $this->lang->line('error_unknown');
    }

    public function get_all_modules()
    {
        $this->db->from('modules');
        $this->db->order_by('sort', 'asc');

        return $this->db->get();
    }

    public function get_allowed_modules($person_id)
    {
        $this->db->from('modules');
        $this->db->join('permissions', 'permissions.module_id=modules.module_id');
        $this->db->where('permissions.person_id', $person_id);
        $this->db->order_by('sort', 'asc');

        return $this->db->get();
    }

    // function get_options_module($module_id)
    // {
    // 	$this->db->select('options');
    // 	$this->db->from('modules');
    // 	// $this->db->join('permissions','permissions.module_id=modules.module_id');
    // 	$this->db->where("module_id",$module_id);
    // 	// $this->db->where("permissions.person_id",$person_id);
    // 	return explode(',', $this->db->get()->row()->options);
    // }
}
