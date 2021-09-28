<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{
    public function visited($ip = null)
    {
        if($ip != null){
            $tgl = date("Y-m-d");
            $cek_ip = $this->db->select("*")
                                ->from("visited_ip")
                                ->where("ip", $ip)
                                ->where("tanggal", $tgl)
                                ->get();
            if($cek_ip->num_rows() == 0){
                $this->db->insert("visited_ip", [
                    "ip" => $ip
                ]);

                $cek_visited = $this->db->select("*")->from("visited")->where("tanggal", $tgl)->get();
                if($cek_visited->num_rows() != 0){
                    $this->db->query("UPDATE visited SET jumlah = (SELECT SUM(jumlah) FROM visited WHERE tanggal = '$tgl')+1");
                }else{
                    $this->db->insert("visited", ["jumlah" => 1]);
                    var_dump($this->db->last_query());
                    die;
                }
            }
        }
    }
}