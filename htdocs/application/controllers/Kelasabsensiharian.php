<?php
class Kelasabsensiharian extends CI_Controller { public function __construct() { goto gd8W0; uNZuq: $this->load->model("\104\141\163\x68\x62\x6f\141\x72\x64\x5f\155\x6f\144\x65\154", "\144\141\x73\x68\x62\x6f\141\x72\144"); goto b2tk_; Wr9FL: MeCHS: goto N78bI; zyfyB: show_error("\x48\x61\x6e\x79\141\x20\101\144\155\151\x6e\x69\x73\x74\162\x61\x74\157\162\40\171\x61\156\147\x20\144\x69\x62\145\162\x69\40\x68\141\153\40\x75\x6e\164\165\153\40\x6d\x65\156\147\x61\x6b\163\x65\163\x20\x68\141\154\x61\x6d\x61\156\40\x69\x6e\151\54\40\74\141\40\x68\x72\x65\146\x3d\42" . base_url("\144\141\x73\150\142\x6f\141\162\144") . "\42\x3e\x4b\x65\155\x62\141\154\x69\x20\x6b\x65\40\x6d\145\156\x75\x20\141\167\x61\154\x3c\57\x61\x3e", 403, "\x41\153\163\145\163\40\124\x65\x72\x6c\x61\x72\141\x6e\147"); goto Wr9FL; LEFkU: $this->load->model("\x4d\141\163\x74\145\x72\x5f\x6d\x6f\x64\145\x6c", "\x6d\x61\163\x74\145\x72"); goto uNZuq; F1ccd: $this->load->model("\x4b\x65\154\141\163\x5f\155\x6f\x64\x65\154", "\153\x65\154\141\x73"); goto UW0im; N78bI: goto KVqJ5; goto VkLQT; VkLQT: GxBa6: goto DQLmd; kxIiy: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\x67\165\x72\165"))) { goto MeCHS; } goto zyfyB; Ab54a: KVqJ5: goto F71Rh; gd8W0: parent::__construct(); goto R8DVn; R8DVn: if (!$this->ion_auth->logged_in()) { goto GxBa6; } goto kxIiy; b2tk_: $this->load->model("\x44\162\x6f\x70\144\157\x77\156\x5f\x6d\x6f\x64\145\x6c", "\x64\x72\x6f\x70\144\x6f\x77\156"); goto F1ccd; DQLmd: redirect("\141\165\164\150"); goto Ab54a; UW0im: $this->form_validation->set_error_delimiters('', ''); goto gNkou; F71Rh: $this->load->library(["\144\x61\164\x61\x74\141\142\x6c\145\x73", "\x66\157\x72\155\137\x76\141\x6c\x69\144\x61\x74\x69\x6f\x6e"]); goto LEFkU; gNkou: } public function output_json($data, $encode = true) { goto qhUhk; dT2p4: $this->output->set_content_type("\141\160\160\x6c\x69\143\x61\x74\151\x6f\x6e\57\152\x73\x6f\x6e")->set_output($data); goto jAB2U; LbAO4: sthi_: goto dT2p4; dQw22: $data = json_encode($data); goto LbAO4; qhUhk: if (!$encode) { goto sthi_; } goto dQw22; jAB2U: } public function index() { goto RTeCx; eWhM8: if ($this->ion_auth->is_admin()) { goto vQss2; } goto Xe1c3; CZUCf: $data["\x67\165\x72\165"] = $this->dropdown->getAllGuru(); goto sogqX; jFUfO: $this->load->view("\155\x65\x6d\x62\145\162\163\x2f\x67\165\162\x75\57\x74\x65\155\x70\154\141\x74\145\163\x2f\x68\x65\x61\x64\145\x72", $data); goto MNDJD; KD44h: $this->load->view("\x5f\x74\x65\155\x70\x6c\141\164\145\x73\x2f\x64\x61\163\150\x62\157\x61\x72\x64\x2f\137\x66\157\157\x74\145\162"); goto WF6EQ; xjYMt: $data["\x73\x6d\164"] = $this->dashboard->getSemester(); goto ABGFp; lH7Qq: $tp = $this->master->getTahunActive(); goto YJRs1; MNDJD: $this->load->view("\153\145\154\141\163\57\x61\x62\163\x65\156\x68\141\x72\151\141\x6e\57\x64\141\x74\141"); goto P3KmI; C9z5_: goto lWGw4; goto c3P4C; PYRpX: $data["\164\160\137\x61\143\164\151\166\145"] = $tp; goto xjYMt; acUZ9: $data["\160\x72\x6f\x66\x69\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id); goto CZUCf; oLF9D: $data["\155\141\160\145\x6c"] = $this->dropdown->getAllMapel(); goto eWhM8; WF6EQ: lWGw4: goto Ki1jU; sogqX: $this->load->view("\x5f\x74\x65\155\x70\154\x61\x74\x65\x73\x2f\144\141\x73\150\x62\157\x61\162\x64\57\137\150\145\x61\x64\145\x72", $data); goto ZbP3U; K5vpx: $data = ["\165\x73\145\x72" => $user, "\152\x75\144\165\x6c" => "\x4b\x65\x68\141\x64\151\x72\x61\x6e\x20\110\x61\x72\151\141\x6e\x20\x53\151\x73\x77\141", "\x73\165\142\x6a\x75\144\165\x6c" => "\104\x61\x74\141\x20\x4b\x65\150\x61\x64\x69\x72\x61\156\40\123\x69\x73\x77\x61", "\163\x65\164\164\x69\156\x67" => $this->dashboard->getSetting()]; goto lH7Qq; RTeCx: $user = $this->ion_auth->user()->row(); goto K5vpx; ZbP3U: $this->load->view("\153\145\154\141\x73\x2f\x61\142\163\x65\x6e\150\x61\x72\151\x61\156\57\x64\141\x74\x61"); goto KD44h; ABGFp: $data["\163\x6d\164\x5f\x61\x63\164\151\x76\145"] = $smt; goto YZWXT; riAKB: $data["\151\144\x5f\x67\x75\x72\165"] = $guru->id_guru; goto jFUfO; ssCgM: $data["\147\165\x72\165"] = $guru; goto riAKB; E6uvP: $nguru[$guru->id_guru] = $guru->nama_guru; goto ssCgM; c3P4C: vQss2: goto acUZ9; WOmKz: $data["\164\160"] = $this->dashboard->getTahun(); goto PYRpX; YJRs1: $smt = $this->master->getSemesterActive(); goto WOmKz; YZWXT: $data["\153\145\x6c\x61\163"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto oLF9D; P3KmI: $this->load->view("\x6d\145\155\x62\x65\x72\x73\57\x67\165\162\x75\57\164\145\x6d\x70\154\x61\164\145\163\x2f\x66\x6f\157\x74\145\x72"); goto C9z5_; Xe1c3: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto E6uvP; Ki1jU: } public function loadAbsensi() { goto TQY_m; yZHB6: if ($info != null) { goto jsOME; } goto Qz1cP; vNrIa: jsOME: goto bmzRj; RRKcN: if (!($info != null)) { goto YUaXM; } goto wsIDN; wsIDN: foreach ($siswa as $s) { goto ElYG0; IgzB9: $log[$s->id_siswa] = ["\x6e\x61\x6d\x61" => $s->nama, "\x6e\151\163" => $s->nis, "\x6b\x65\154\141\x73" => $s->nama_kelas, "\x73\164\x61\x74\x75\163" => $status]; goto XOmPF; fAEMM: AZ04P: goto IgzB9; XOmPF: maLcs: goto itOqG; seCmi: $status = []; goto kw6JC; ElYG0: $status_materi = []; goto VaBtK; SJe1T: DB1Uj: goto seCmi; kw6JC: foreach ($status_materi as $stat) { $status[$stat->jam_ke][$stat->id_mapel][$stat->jenis] = $stat; XABAv: } goto fAEMM; VaBtK: if (!(count($arrIdKjm) > 0)) { goto DB1Uj; } goto RqT2R; RqT2R: $status_materi = $this->kelas->getRekapStatusMateri($s->id_siswa, $arrIdKjm); goto SJe1T; itOqG: } goto gcs5B; TSplD: WdxcP: goto EkXgG; k0DkF: fko1o: goto ewnow; tHWh6: $log = []; goto RRKcN; TQY_m: $id_kelas = $this->input->post("\x6b\145\x6c\x61\163", true); goto Oa2xI; X3wyD: $arrIdMapel = []; goto uschy; Oa2xI: $tahun = $this->input->post("\164\150\x6e", true); goto xw9W5; Qz1cP: $istirahat = []; goto wElrR; SdYB4: $jadwal = $this->dashboard->loadJadwalHariIni($id_tp, $id_smt, $id_kelas, $hari); goto X3wyD; tMKTt: $id_smt = $this->master->getSemesterActive()->id_smt; goto P4DO5; auKs1: dXyoy: goto SdYB4; tROO1: YUaXM: goto lCMg1; gcs5B: LPDX9: goto tROO1; yIeTN: $tanggal = str_pad($tanggal, 2, "\x30", STR_PAD_LEFT); goto Eqfik; bmzRj: $istirahat = unserialize($info->istirahat); goto auKs1; xw9W5: $bulan = $this->input->post("\142\154\156", true); goto PzCpy; lCMg1: $this->output_json(array("\x74\145\x73\x74" => [$id_kelas, $tahun . "\x2d" . $bulan . "\55" . $tanggal, $arrIdMapel], "\154\157\147" => $log, "\x69\x6e\x66\157" => $info, "\x6a\x61\144\167\x61\x6c" => $jadwal, "\x6d\141\x74\145\162\151" => $jadwal_materi, "\x69\x73\164\151\162\x61\150\x61\164" => $istirahat)); goto XalMR; Eqfik: $info = $this->dashboard->getJadwalKbm($id_tp, $id_smt, $id_kelas); goto yZHB6; r5bc4: $id_tp = $this->master->getTahunActive()->id_tp; goto tMKTt; uschy: foreach ($jadwal as $jd) { array_push($arrIdMapel, $jd->id_mapel); Zc1va: } goto URhmK; PzCpy: $tanggal = $this->input->post("\x74\147\x6c", true); goto SShdR; ewnow: $arrIdKjm = []; goto Gb2M5; K4H_7: $jadwal_materi = []; goto ewtg3; Gb2M5: foreach ($jadwal_materi as $jmtr) { goto T0JcR; T0JcR: foreach ($jmtr as $jam) { goto CgdEc; PrZMN: QlA78: goto T89R1; T89R1: CnlyA: goto Q0FVL; CgdEc: foreach ($jam as $jns) { array_push($arrIdKjm, $jns->id_kjm); iXgMo: } goto PrZMN; Q0FVL: } goto d3_Jb; d3_Jb: uSx0u: goto bGiaP; bGiaP: LWZai: goto Np_xE; Np_xE: } goto TSplD; wElrR: goto dXyoy; goto vNrIa; URhmK: Lhy0l: goto K4H_7; SShdR: $hari = $this->input->post("\x68\141\162\151", true); goto r5bc4; EaLQy: $jadwal_materi = $this->kelas->getAllMateriByTgl($id_kelas, $tahun . "\55" . $bulan . "\55" . $tanggal, $arrIdMapel); goto k0DkF; EkXgG: $siswa = $this->kelas->getKelasSiswa($id_kelas, $id_tp, $id_smt); goto tHWh6; ewtg3: if (!(count($arrIdMapel) > 0)) { goto fko1o; } goto EaLQy; P4DO5: $bulan = str_pad($bulan, 2, "\60", STR_PAD_LEFT); goto yIeTN; XalMR: } }