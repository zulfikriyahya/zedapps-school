<?php
class Cbtjadwal extends CI_Controller { public function __construct() { goto jDk1b; cEvpS: roASS: goto OTMRE; czbMj: u35ez: goto TEjbQ; mNOxa: if (!$this->ion_auth->logged_in()) { goto roASS; } goto uP71i; MCY5x: $this->load->library(["\144\x61\164\141\164\x61\x62\154\145\x73", "\146\x6f\162\155\x5f\166\x61\x6c\x69\x64\141\x74\x69\x6f\x6e"]); goto x7X3n; jDk1b: parent::__construct(); goto mNOxa; uP71i: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\165\162\x75"))) { goto u35ez; } goto WBTJq; TEjbQ: goto IT2pQ; goto cEvpS; nfqQk: IT2pQ: goto MCY5x; OTMRE: redirect("\141\165\164\x68"); goto nfqQk; x7X3n: $this->form_validation->set_error_delimiters('', ''); goto hpYt8; WBTJq: show_error("\x48\141\x6e\x79\141\x20\x41\144\x6d\151\x6e\151\x73\x74\162\x61\164\x6f\162\x20\144\x61\156\40\x67\x75\x72\x75\40\x79\141\156\147\x20\144\x69\x62\145\162\151\x20\x68\x61\x6b\x20\165\156\164\x75\x6b\40\155\x65\156\x67\141\x6b\x73\x65\x73\40\x68\141\x6c\x61\155\141\x6e\x20\151\x6e\151\x2c\x20\74\141\x20\x68\x72\145\x66\x3d\42" . base_url("\144\x61\x73\x68\x62\157\141\x72\x64") . "\x22\76\113\145\x6d\x62\x61\x6c\151\40\153\x65\40\155\x65\x6e\165\40\x61\167\141\x6c\74\57\141\76", 403, "\x41\x6b\x73\x65\163\40\124\145\x72\154\x61\162\141\x6e\x67"); goto czbMj; hpYt8: } public function output_json($data, $encode = true) { goto hQd_E; YrDyh: $this->output->set_content_type("\x61\160\x70\154\151\143\141\164\151\x6f\x6e\57\x6a\x73\157\x6e")->set_output($data); goto BfCgs; Ckksn: Mdhz0: goto YrDyh; hQd_E: if (!$encode) { goto Mdhz0; } goto uB6IV; uB6IV: $data = json_encode($data); goto Ckksn; BfCgs: } public function index() { goto Axc9H; hczvC: $data["\163\x6d\x74"] = $this->dashboard->getSemester(); goto iptU5; AuJg_: $data["\151\144\137\x67\165\162\165"] = ''; goto tCgGD; erADr: $data["\x69\144\137\154\145\x76\145\x6c"] = $id_level; goto sxoHY; tCgGD: $data["\151\x64\x5f\x6c\x65\166\x65\154"] = ''; goto hloGR; J3zRX: goto oXVZ6; goto qe90e; nsIZ2: if ($type == "\62") { goto JnKYO; } goto zuWuu; JosQ0: if ($type == "\x33") { goto wTuK2; } goto HjTWp; Bw2z8: $data["\152\141\144\167\x61\154"] = json_decode(json_encode($this->cbt->dummyJadwal())); goto BInqz; EbhFj: $data["\x69\x64\137\147\x75\162\165"] = ''; goto KhQN6; g0olh: $lvl = $this->input->get("\x6c\x65\166\145\154", true); goto PHm9z; seWRn: $data["\x6a\x6d\x6c\x4d\141\160\145\154"] = []; goto ZLbPr; bCpHR: G7u5v: goto fRDss; HYxaP: $data["\x6a\x61\x64\167\141\x6c\x73"] = $this->cbt->getAllDataJadwal($guru->id_guru, $id_mapel); goto AuJg_; LXIiK: Ye8ZM: goto vGC9X; g44Uf: $data["\x74\160"] = $this->dashboard->getTahun(); goto RASMu; G40DN: $type = $this->input->get("\x74\x79\160\145"); goto EljBv; U15B_: if ($this->ion_auth->is_admin()) { goto G7u5v; } goto wezS3; cOzTQ: XIf3F: goto P4jsp; hf2nq: $data["\x69\144\x5f\146\151\154\164\x65\162"] = $type == null ? '' : $type; goto n7uuo; A0AT1: hjL4O: goto EM4iM; hEiAF: $terpakai = $this->cbt->getJadwalTerpakai(); goto X5FWx; LaArl: $data["\x69\x64\x5f\x67\x75\162\x75"] = null; goto QWLFG; qe90e: lZSk9: goto Y8ypj; f0or6: $data["\152\x61\144\x77\141\x6c\163"] = $this->cbt->getAllDataJadwal(null, null, $id_level); goto ocJoA; uA_wq: $data["\151\144\137\x6c\x65\166\x65\154"] = null; goto J3zRX; EljBv: $data["\x6d\x6f\x64\x65"] = $mode == null ? "\x31" : $mode; goto xpyFa; G7hE0: $this->load->model("\x44\141\x73\150\142\x6f\141\x72\x64\137\x6d\x6f\x64\x65\x6c", "\144\141\x73\x68\142\157\x61\x72\144"); goto tgfmV; WIUyf: $data["\x69\x64\x5f\x6d\x61\x70\x65\154"] = null; goto OtrK1; cEcPu: $data["\151\144\x5f\155\x61\x70\x65\x6c"] = $id_mapel; goto wEaVz; Y8ypj: $data["\x6a\141\x64\x77\x61\x6c\163"] = $this->cbt->getAllDataJadwal(); goto j9FWn; QWLFG: $data["\x69\x64\137\155\141\x70\x65\x6c"] = null; goto uA_wq; wqCQ6: $id_mapel = $this->input->get("\151\144"); goto cEcPu; JtN15: oXVZ6: goto KaMYz; Jn_8N: N0ONq: goto cly51; P4jsp: $data["\x74\157\x74\x61\x6c\137\x73\x69\163\167\x61"] = $jadwal_terpakai; goto RgQ2x; YmiYl: $data["\x61\144\141\137\165\152\x69\141\x6e"] = $this->cbt->getDataJadwalByTgl(date("\x59\55\x6d\x2d\x64")); goto ozWzl; hloGR: goto hjL4O; goto Uo_dV; k20Du: $tp = $this->dashboard->getTahunActive(); goto SxkNP; FtT8P: $data["\x69\x64\137\x6c\145\x76\x65\154"] = null; goto bFNI6; RASMu: $data["\x74\160\x5f\x61\143\x74\151\166\x65"] = $tp; goto hczvC; i_lC7: $data["\151\x64\137\x6d\x61\160\145\x6c"] = null; goto cRNB9; fRDss: $data["\160\162\x6f\x66\151\154\145"] = $this->dashboard->getProfileAdmin($user->id); goto nNfZM; YCNcN: $data["\146\151\154\164\x65\162\x73"] = ["\x30" => "\x53\x65\x6d\165\x61", "\x32" => "\x4d\141\x70\145\x6c", "\63" => "\x4c\x65\166\x65\x6c"]; goto HWMfV; ocJoA: $data["\151\144\x5f\147\165\x72\165"] = ''; goto H76zG; KhQN6: $data["\151\144\x5f\154\145\166\x65\154"] = ''; goto Mh8eY; PSMtq: if (!$mapel) { goto fpL2Q; } goto R56x_; Ajbj5: $data = ["\x75\163\145\162" => $user, "\152\165\x64\x75\x6c" => "\112\x61\144\x77\141\x6c\x20\x50\145\156\x69\154\141\151\141\x6e", "\163\x75\142\152\165\144\x75\154" => "\x50\110\57\x50\x54\123\x2f\x50\101\x54\57\125\123\x42\x4b", "\x73\145\x74\x74\x69\156\x67" => $setting]; goto k20Du; TlmqV: HC0Gp: goto CsS8e; EM4iM: $this->load->view("\x6d\145\155\142\x65\162\163\57\147\165\x72\x75\57\x74\145\x6d\160\154\x61\x74\x65\163\x2f\x68\145\141\x64\x65\x72", $data); goto uMwfs; CsS8e: $id_level = $this->input->get("\151\x64"); goto QqtyI; cRNB9: $data["\151\144\x5f\154\x65\x76\145\154"] = null; goto J8uP7; ziw5Q: goto Ye8ZM; goto bCpHR; a1viG: $this->load->view("\x63\x62\164\x2f\152\141\x64\167\141\x6c\57\x64\141\164\x61"); goto THR4u; Q4J1F: $data["\x69\144\x5f\155\141\x70\x65\x6c"] = $id_mapel; goto HYxaP; yXNdv: $mode = $this->input->get("\x6d\157\144\x65"); goto G40DN; nNfZM: $data["\147\165\162\x75\163"] = $this->dropdown->getAllGuru(); goto Clo7F; ozWzl: $data["\154\145\x76\145\x6c\x73"] = $this->dropdown->getAllLevel($setting->jenjang); goto nTZYZ; coTDy: ckd8B: goto d_y5h; j3Qpp: foreach ($terpakai as $idj => $rows) { $jadwal_terpakai[$idj] = count($rows); Qq7f4: } goto cOzTQ; QqtyI: $data["\151\x64\137\x6c\145\x76\145\x6c"] = $id_level; goto f0or6; eVpPm: $data["\152\x65\156\151\x73"] = $this->cbt->getAllJenisUjian(); goto Bw2z8; KowTL: $data["\151\144\137\x6d\x61\160\145\x6c"] = ''; goto A0AT1; RgQ2x: X7moo: goto YmiYl; OtrK1: $data["\151\x64\137\x6c\x65\x76\145\x6c"] = null; goto tGA0o; nTZYZ: $data["\x6b\145\154\x61\163"] = $this->cbt->getKelas($tp->id_tp, $smt->id_smt); goto U15B_; X5FWx: $jadwal_terpakai = []; goto j3Qpp; HNOHj: $data["\x69\x64\137\155\x61\x70\145\154"] = ''; goto QQnp8; i3Sn3: $this->load->view("\155\145\155\142\145\162\x73\x2f\147\165\x72\165\x2f\164\x65\x6d\x70\154\x61\164\145\163\x2f\146\157\x6f\x74\145\162"); goto ziw5Q; wezS3: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto eTT_n; SAgs6: $data["\151\144\x5f\x6d\x61\160\145\154"] = null; goto FtT8P; kWbAj: $data["\x69\x64\137\x67\165\162\165"] = null; goto WIUyf; D4ZQ4: $data["\x66\151\x6c\x74\x65\x72\x73"] = ["\x30" => "\x53\x65\x6d\x75\x61", "\x31" => "\107\165\162\165", "\x32" => "\x4d\141\x70\x65\x6c", "\x33" => "\x4c\145\x76\x65\x6c"]; goto hf2nq; KaMYz: $this->load->view("\137\x74\x65\x6d\x70\154\x61\x74\145\163\57\144\141\x73\150\142\157\x61\x72\144\x2f\137\150\145\141\x64\x65\162", $data); goto a1viG; H76zG: $data["\x69\144\x5f\x6d\x61\160\x65\154"] = ''; goto JtN15; eTT_n: $data["\x67\x75\162\165"] = $guru; goto wxMTU; SxkNP: $smt = $this->dashboard->getSemesterActive(); goto g44Uf; bFNI6: goto oXVZ6; goto coTDy; THR4u: $this->load->view("\137\x74\145\x6d\160\154\x61\x74\145\x73\x2f\144\x61\x73\150\142\157\x61\162\144\57\x5f\146\157\x6f\164\x65\162"); goto LXIiK; QQnp8: $data["\x69\x64\137\x6c\x65\x76\145\x6c"] = ''; goto lDAqj; tGA0o: goto hjL4O; goto Jn_8N; HjTWp: $data["\151\x64\137\147\165\x72\x75"] = null; goto i_lC7; R56x_: foreach ($mapel as $m) { $arrMapel[$m->id_mapel] = $m->nama_mapel; m2CED: } goto Pi31R; Bu92p: if ($type == "\60") { goto pXprH; } goto EEZaX; NBiCD: $data["\151\x64\137\x67\165\x72\165"] = ''; goto KowTL; NayoT: $this->load->model("\104\x72\x6f\x70\144\x6f\x77\156\137\x6d\157\144\x65\x6c", "\x64\x72\157\x70\x64\157\167\x6e"); goto g0olh; SPMnS: $id_level = $this->input->get("\x69\144"); goto erADr; Axc9H: $this->load->model("\103\142\x74\137\155\157\144\x65\x6c", "\x63\142\164"); goto G7hE0; PoOEw: $data["\152\x61\x64\x77\141\x6c\163"] = $this->cbt->getAllDataJadwal($id_guru); goto HNOHj; bnp40: $arrMapel = []; goto PSMtq; xpyFa: $data["\162\x75\141\x6e\x67\163"] = $this->cbt->getAllRuang(); goto dTcFH; uMwfs: $this->load->view("\143\x62\164\x2f\x6a\141\x64\167\x61\x6c\57\x64\x61\164\x61"); goto i3Sn3; sxoHY: $data["\152\141\144\167\141\154\x73"] = $this->cbt->getAllDataJadwal($guru->id_guru, null, $id_level); goto NBiCD; J8uP7: goto hjL4O; goto TQfJQ; ZLbPr: $data["\x6c\x65\x76\145\154"] = $level; goto aZgXn; lDAqj: goto oXVZ6; goto tRrvy; j9FWn: $data["\151\x64\x5f\147\x75\x72\x75"] = null; goto SAgs6; yevyx: $setting = $this->dashboard->getSetting(); goto Ajbj5; wxMTU: $mapel_guru = $this->kelas->getGuruMapelKelas($guru->id_guru, $tp->id_tp, $smt->id_smt); goto tFbSx; PBWHR: $data["\x69\144\x5f\147\x75\x72\165"] = $id_guru; goto PoOEw; cly51: $id_mapel = $this->input->get("\151\x64"); goto Q4J1F; I8K_A: if ($type == "\61") { goto ckd8B; } goto nsIZ2; BInqz: $data["\x6a\x6d\154\111\163\x74"] = []; goto seWRn; FYseH: fpL2Q: goto n_a3Y; PHm9z: $level = $lvl == null ? "\60" : $lvl; goto CAVEE; JzOqI: $data["\152\141\x64\x77\x61\x6c\x73"] = $this->cbt->getAllDataJadwal($guru->id_guru); goto kWbAj; tRrvy: JnKYO: goto wqCQ6; HWMfV: $data["\x69\x64\137\146\151\x6c\x74\145\162"] = $type == null ? '' : $type; goto Bu92p; aZgXn: if (!$mode) { goto X7moo; } goto hEiAF; Pi31R: MBm6i: goto FYseH; wEaVz: $data["\152\x61\144\x77\x61\x6c\163"] = $this->cbt->getAllDataJadwal(null, $id_mapel); goto EbhFj; Uo_dV: wTuK2: goto SPMnS; d_y5h: $id_guru = $this->input->get("\151\x64"); goto PBWHR; n_a3Y: $data["\x6d\141\160\x65\154\163"] = $arrMapel; goto YCNcN; tgfmV: $this->load->model("\113\x65\154\x61\163\x5f\155\157\x64\x65\x6c", "\x6b\145\154\x61\163"); goto NayoT; tFbSx: $mapel = json_decode(json_encode(unserialize($mapel_guru->mapel_kelas ?? ''))); goto bnp40; EEZaX: if ($type == "\x32") { goto N0ONq; } goto JosQ0; n7uuo: if ($type == "\60") { goto lZSk9; } goto I8K_A; TQfJQ: pXprH: goto JzOqI; Clo7F: $data["\x6d\x61\x70\145\x6c\163"] = $this->dropdown->getAllMapel(); goto D4ZQ4; dTcFH: $data["\163\145\163\x69\163"] = $this->dropdown->getAllSesi(); goto eVpPm; CAVEE: $user = $this->ion_auth->user()->row(); goto yevyx; iptU5: $data["\x73\155\164\137\x61\143\164\151\166\x65"] = $smt; goto yXNdv; Mh8eY: goto oXVZ6; goto TlmqV; zuWuu: if ($type == "\x33") { goto HC0Gp; } goto LaArl; vGC9X: } public function add($id_jadwal) { goto gePwr; YUp4f: $data["\163\x6d\x74"] = $this->dashboard->getSemester(); goto teYCN; PaBiK: $tp = $this->dashboard->getTahunActive(); goto rp55f; rp55f: $smt = $this->dashboard->getSemesterActive(); goto y2N1N; qOCDN: N5fxZ: goto O1QC6; UF4sg: $user = $this->ion_auth->user()->row(); goto fwesP; aDEdv: X9um0: goto W4moz; RzsP3: $this->load->model("\104\141\163\x68\x62\x6f\141\x72\144\x5f\x6d\157\144\x65\x6c", "\x64\141\x73\150\x62\157\x61\x72\x64"); goto II0nb; medd1: $data["\144\151\163\x61\142\154\x65\137\x6f\160\x73\x69"] = $enable != null && $enable == 1; goto waGPZ; O1QC6: $data["\155\141\x70\145\x6c"] = $arrMapel; goto S1p2i; GuNCR: EXtrd: goto sngbK; S1p2i: $this->load->view("\155\145\155\x62\x65\162\163\x2f\147\x75\x72\x75\57\x74\145\155\x70\x6c\141\164\145\163\57\150\145\141\x64\x65\x72", $data); goto VmVyP; ji7iL: $data["\x6d\141\x70\x65\154"] = $this->dropdown->getAllMapel(); goto BjMST; rAYlS: $gurus = $this->dropdown->getAllGuru(); goto W87Yn; JBwKn: $mapel = json_decode(json_encode(unserialize($mapel_guru->mapel_kelas))); goto r6rqW; n6nEz: $enable = $this->input->get("\x65\156\141\142\x6c\145", true); goto UF4sg; W87Yn: $data["\162\x75\141\x6e\147\x73"] = $this->cbt->getAllRuang(); goto NMCHZ; PlobD: dSKnM: goto rAYlS; fZAJQ: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto n_LML; n_LML: $data["\147\165\x72\165"] = $guru; goto X3rAz; Wa6Pb: $data["\153\x65\x6c\x61\163"] = $this->cbt->getKelas($tp->id_tp, $smt->id_smt); goto medd1; gePwr: $this->load->model("\103\142\164\x5f\155\x6f\x64\x65\154", "\x63\142\x74"); goto RzsP3; teYCN: $data["\x73\155\x74\137\x61\x63\164\151\166\145"] = $smt; goto TmRsv; X3rAz: $mapel_guru = $this->kelas->getGuruMapelKelas($guru->id_guru, $tp->id_tp, $smt->id_smt); goto JBwKn; JMZ0P: foreach ($mapel as $m) { $arrMapel[$m->id_mapel] = $m->nama_mapel; vTVnc: } goto qOCDN; waGPZ: if ($this->ion_auth->is_admin()) { goto gna6g; } goto fZAJQ; Upm1m: $data["\x70\162\x6f\x66\x69\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id); goto uvskE; ZhDWb: $data["\x6a\x65\156\x69\163"] = $this->cbt->getAllJenisUjian(); goto Wa6Pb; osxd8: $this->load->view("\137\x74\145\x6d\160\x6c\x61\x74\145\163\x2f\144\141\163\x68\142\x6f\141\x72\144\57\x5f\146\157\157\x74\x65\162"); goto GuNCR; y2N1N: $data["\164\x70"] = $this->dashboard->getTahun(); goto Lq2uV; bjKL0: $this->load->model("\x44\162\157\160\144\157\x77\x6e\137\x6d\x6f\x64\x65\154", "\144\x72\157\160\x64\157\x77\x6e"); goto n6nEz; Wqh8t: gna6g: goto Upm1m; II0nb: $this->load->model("\x4b\x65\154\141\x73\x5f\x6d\x6f\144\145\x6c", "\153\145\154\x61\163"); goto bjKL0; W4moz: $data["\152\x61\144\167\x61\154"] = json_decode(json_encode($this->cbt->dummyJadwal())); goto PlobD; YVnr8: $data["\x6a\141\x64\167\141\154"] = $this->cbt->getJadwalById($id_jadwal); goto i8q2q; fwesP: $data = ["\x75\163\x65\162" => $user, "\x6a\165\144\x75\154" => $id_jadwal == 0 ? "\124\x61\155\142\x61\150\x20\x4a\141\144\167\x61\x6c\x20\125\152\x69\141\156" : "\x45\144\x69\x74\x20\112\141\144\x77\141\154\x20\125\x6a\151\x61\x6e", "\x73\x75\x62\x6a\165\144\165\154" => "\x4a\141\x64\167\x61\154", "\x73\145\x74\x74\x69\x6e\x67" => $this->dashboard->getSetting()]; goto PaBiK; vgfrX: $this->load->view("\x63\x62\x74\x2f\x6a\x61\x64\167\x61\154\57\141\144\144"); goto osxd8; VmVyP: $this->load->view("\x63\142\x74\x2f\152\x61\144\x77\141\x6c\x2f\x61\x64\144"); goto Vq6P3; BjMST: $this->load->view("\x5f\x74\145\x6d\160\154\141\164\x65\163\x2f\144\x61\163\150\142\157\x61\162\144\57\x5f\x68\145\141\144\x65\x72", $data); goto vgfrX; mJc6P: goto EXtrd; goto Wqh8t; i8q2q: goto dSKnM; goto aDEdv; Vq6P3: $this->load->view("\x6d\145\x6d\x62\145\162\x73\57\147\x75\162\165\x2f\x74\145\155\x70\x6c\141\x74\x65\163\x2f\146\x6f\157\x74\145\x72"); goto mJc6P; TmRsv: if ($id_jadwal == 0) { goto X9um0; } goto YVnr8; uvskE: $data["\x67\x75\162\165"] = $gurus; goto ji7iL; r6rqW: $arrMapel = []; goto JMZ0P; NMCHZ: $data["\163\x65\163\x69\x73"] = $this->dropdown->getAllSesi(); goto ZhDWb; Lq2uV: $data["\x74\x70\x5f\x61\x63\164\x69\166\x65"] = $tp; goto YUp4f; sngbK: } public function getBankMapel($id_mapel) { goto QJPlG; Qy4iC: foreach ($banks as $key => $bank) { goto FHNP1; xhXmM: u2nDg: goto jPAD2; tEk3e: $ada2 = $num2 == (int) $bank->tampil_kompleks; goto hYjLI; XWJBv: $ada4 = $num4 == (int) $bank->tampil_isian; goto RkKLM; D6aG8: $num4 = isset($cek_soal["\64"]) ? count($cek_soal["\64"]) : 0; goto p1Wi3; RkKLM: $ada5 = $num5 == (int) $bank->tampil_esai; goto C7kwj; VLZwb: $filtered[$key] = $bank->bank_kode; goto xhXmM; hYjLI: $ada3 = $num3 == (int) $bank->tampil_jodohkan; goto XWJBv; PTmTO: $num2 = isset($cek_soal["\x32"]) ? count($cek_soal["\x32"]) : 0; goto GHQ_s; C7kwj: if (!($ada1 && $ada2 && $ada3 && $ada4 && $ada5)) { goto u2nDg; } goto VLZwb; FHNP1: $cek_soal = $this->cbt->getJumlahJenisSoal($key); goto VY0I2; jPAD2: JTEEp: goto DtOEh; p1Wi3: $num5 = isset($cek_soal["\x35"]) ? count($cek_soal["\65"]) : 0; goto psV5q; GHQ_s: $num3 = isset($cek_soal["\63"]) ? count($cek_soal["\x33"]) : 0; goto D6aG8; psV5q: $ada1 = $num1 == (int) $bank->tampil_pg; goto tEk3e; VY0I2: $num1 = isset($cek_soal["\x31"]) ? count($cek_soal["\61"]) : 0; goto PTmTO; DtOEh: } goto p3UwI; tWSIU: $smt = $this->dashboard->getSemesterActive(); goto kJEyc; QJPlG: $this->load->model("\103\x62\x74\137\x6d\x6f\144\x65\154", "\x63\142\x74"); goto zJnjx; zJnjx: $this->load->model("\104\141\163\x68\142\x6f\141\162\x64\137\155\157\144\x65\154", "\144\x61\163\150\x62\157\141\x72\144"); goto kIWCL; kJEyc: $banks = $this->cbt->getAllBankSoalByMapel($tp->id_tp, $smt->id_smt, $id_mapel); goto tclOh; tclOh: $filtered = []; goto Qy4iC; kIWCL: $tp = $this->dashboard->getTahunActive(); goto tWSIU; QVH45: $this->output_json($filtered); goto lzogf; p3UwI: J2QCr: goto QVH45; lzogf: } public function saveJadwal() { goto Bn1ow; WeUE4: $status = $res; goto plMOP; NIkUT: $id = $this->input->post("\151\144\x5f\x6a\141\144\167\141\154", true); goto jpPYZ; FhBbf: CUsOe: goto iofxp; vDoXS: $this->output_json($data); goto fK_35; w7FiB: $res = $this->cbt->saveJadwalUjian($tp->id_tp, $smt->id_smt); goto OxTnZ; L9KFr: ro9HO: goto vDoXS; U2dzO: if ($this->input->post()) { goto UBTc3; } goto rdtmd; Gtl3t: $data["\x73\x75\x63\x63\145\x73\x73"] = $status; goto NIkUT; Uv9eu: $this->logging->saveLog(4, "\x6d\x65\156\x67\145\144\x69\x74\40\152\141\144\167\x61\154\40\x70\x65\154\x61\x6a\141\162\141\x6e"); goto DGJjQ; iofxp: $this->logging->saveLog(3, "\x6d\145\156\141\x6d\x62\141\150\x20\x6a\141\x64\x77\x61\154\40\160\145\154\x61\x6a\x61\162\141\156"); goto L9KFr; rdtmd: $data["\155\145\163\x73\141\x67\145"] = "\113\x65\x73\141\154\141\x68\x61\156\40\x34\60\x34"; goto bG7Fg; jpPYZ: if (!$id) { goto CUsOe; } goto Uv9eu; DGJjQ: goto ro9HO; goto FhBbf; cw6DN: $this->load->model("\114\157\x67\137\155\x6f\x64\x65\x6c", "\154\x6f\x67\147\151\156\x67"); goto qppyj; plMOP: SNZH3: goto Gtl3t; bG7Fg: $status = FALSE; goto i_DdJ; qppyj: $tp = $this->dashboard->getTahunActive(); goto rsdx9; vJ2cp: $this->load->model("\104\141\163\150\142\157\141\x72\144\x5f\155\157\144\145\x6c", "\x64\141\x73\x68\142\x6f\x61\x72\x64"); goto cw6DN; rsdx9: $smt = $this->dashboard->getSemesterActive(); goto U2dzO; OxTnZ: $data["\155\145\x73\163\x61\x67\x65"] = $res ? "\112\141\144\167\x61\x6c\40\142\x65\162\150\x61\163\151\154\40\144\151\163\151\155\x70\141\x6e" : "\112\x61\x64\x77\x61\x6c\40\163\165\144\x61\x68\x20\x61\144\141"; goto WeUE4; Bn1ow: $this->load->model("\x43\x62\164\137\x6d\157\144\x65\x6c", "\143\142\164"); goto vJ2cp; i_DdJ: goto SNZH3; goto Si9Im; Si9Im: UBTc3: goto w7FiB; fK_35: } public function deleteJadwal() { goto a7VFp; tUXll: goto wAROM; goto vN1y8; HDfFY: $data["\x6d\x65\163\163\x61\147\145"] = "\x4a\x61\144\167\x61\x6c\40\125\152\151\141\x6e\40\x73\145\x64\141\x6e\147\x20\x64\151\147\165\x6e\141\153\141\x6e"; goto tUXll; GBQ0G: $id = $this->input->get("\x69\x64\x5f\152\141\x64\x77\x61\154", true); goto xVmTi; xsgnY: $jadwal = $this->cbt->getJadwalById($id); goto BfSCG; xVmTi: $jadwal_dikerjakan = $this->cbt->getJadwalTerpakai(); goto kQBra; WpGZU: $data["\163\164\x61\164\165\x73"] = false; goto xsgnY; BfSCG: if ($terpakai && $jadwal->rekap == 0) { goto FWDk8; } goto yOZNF; v27yO: FWDk8: goto UpV0p; K969N: $this->output_json($data); goto bp4jG; kQBra: $terpakai = isset($jadwal_dikerjakan[$id]) && count($jadwal_dikerjakan[$id]) > 0; goto WpGZU; thmGB: $data["\x6d\x65\163\x73\141\x67\145"] = "\142\x65\x72\150\141\x73\x69\154"; goto EVJjd; s1L4r: $this->logging->saveLog(5, "\155\145\156\147\x68\x61\160\165\163\x20\x6a\x61\x64\167\x61\x6c\40\165\x6a\151\141\x6e"); goto AFu_h; vN1y8: SajVs: goto NDiL3; a7VFp: $this->load->model("\x4d\141\x73\164\x65\162\x5f\x6d\x6f\144\x65\x6c", "\155\x61\163\x74\x65\x72"); goto QDEm1; NDiL3: $hapusNilaiSiswa = $this->master->delete("\x63\x62\x74\x5f\x73\157\141\x6c\x5f\163\x69\163\167\x61", $id, "\151\144\x5f\152\141\x64\167\141\x6c"); goto NfHgb; AFu_h: $data["\163\164\x61\x74\x75\163"] = $hapusNilaiSiswa && $hapusDurasiSiswa; goto thmGB; PiEL_: $data["\163\x74\141\164\x75\x73"] = false; goto HDfFY; QhDJh: $this->load->model("\x4c\x6f\147\x5f\155\x6f\x64\145\x6c", "\154\x6f\147\147\x69\x6e\x67"); goto GBQ0G; XxGAw: p0k43: goto K969N; QDEm1: $this->load->model("\103\142\164\x5f\x6d\157\144\145\x6c", "\143\x62\164"); goto QhDJh; eXFXk: goto p0k43; goto v27yO; xYICl: $data["\x6d\145\163\163\141\x67\x65"] = "\110\141\x73\151\154\x20\125\x6a\151\x61\156\40\x62\145\x6c\165\155\x20\x64\151\x72\145\153\x61\x70"; goto XxGAw; EVJjd: wAROM: goto eXFXk; yOZNF: if ($this->master->delete("\x63\x62\x74\x5f\152\141\x64\167\141\154", $id, "\x69\144\x5f\152\141\144\167\x61\154")) { goto SajVs; } goto PiEL_; UpV0p: $data["\163\164\141\x74\165\163"] = false; goto xYICl; NfHgb: $hapusDurasiSiswa = $this->master->delete("\x63\142\x74\x5f\144\x75\x72\x61\163\151\x5f\163\151\x73\167\141", $id, "\x69\x64\137\x6a\141\x64\167\141\x6c"); goto s1L4r; bp4jG: } public function deleteAllJadwal() { goto vVaff; T7WkA: $count_terpakai = array_count_values($digunakan); goto qC6EQ; t0PJO: $data["\x73\164\x61\x74\165\x73"] = false; goto I5Fps; vjEHO: $hapusDurasiSiswa = $this->master->delete("\143\142\x74\137\144\165\162\141\x73\151\137\x73\x69\163\167\x61", $arrId, "\151\144\137\x6a\141\x64\x77\x61\x6c"); goto aXDp3; wtGZh: P0_3d: goto zFWb0; I5Fps: $data["\155\x65\163\163\141\147\x65"] = "\110\141\x73\x69\154\40\x55\152\151\x61\156\x20\142\145\x6c\x75\x6d\x20\144\x69\162\145\153\x61\x70"; goto dS8Hj; yusjo: $jadwal_dikerjakan = $this->cbt->getJadwalTerpakai(); goto vze2r; nwMgn: $data["\x62\141\143\x6b\165\160"] = $counts; goto Y7Z27; KGoXH: $jadwals = $this->cbt->getJadwalByArrId($arrId); goto yusjo; dS8Hj: J3BaU: goto QeR9a; B7hsL: tiGCE: goto SIOK8; vVaff: $this->load->model("\115\x61\x73\164\145\162\x5f\x6d\x6f\144\x65\x6c", "\x6d\x61\163\164\x65\162"); goto N6wlI; T70kj: $digunakan = []; goto C0_Ib; KpNLI: ob_end_clean(); goto NjNAY; tZy66: if ($count_terpakai[1] > 0 && $counts[0] > 0) { goto Cd4bq; } goto q9VMS; zFWb0: $hapusNilaiSiswa = $this->master->delete("\x63\x62\164\137\163\x6f\x61\x6c\x5f\163\x69\x73\167\x61", $arrId, "\x69\144\x5f\x6a\x61\x64\x77\x61\x6c"); goto vjEHO; yqyZr: $data["\x6d\x65\163\x73\141\x67\x65"] = "\142\145\x72\150\x61\x73\x69\154"; goto B7hsL; aXDp3: $this->logging->saveLog(5, "\155\145\x6e\x67\x68\141\x70\x75\163\40\152\x61\144\x77\x61\x6c\x20\165\152\151\141\156"); goto KpNLI; teQ0e: $data["\x73\x74\141\x74\165\x73"] = false; goto ZdiN0; k5PSk: ob_end_clean(); goto t0PJO; N6wlI: $this->load->model("\x43\142\164\137\x6d\x6f\x64\145\x6c", "\143\x62\x74"); goto w64Gw; qC6EQ: $counts = array_count_values($backuped); goto tZy66; vze2r: $backuped = []; goto T70kj; YHmW3: ob_start(); goto KGoXH; L5zxI: ob_end_clean(); goto teQ0e; C0_Ib: foreach ($jadwals as $jadwal) { goto A6H2s; A6H2s: $terpakai = isset($jadwal_dikerjakan[$jadwal->id_jadwal]) && count($jadwal_dikerjakan[$jadwal->id_jadwal]) > 0 ? 1 : 0; goto SlZk4; SlZk4: array_push($backuped, $jadwal->rekap); goto UJbS8; NMwzM: J1hXG: goto dLPUx; UJbS8: array_push($digunakan, $terpakai); goto NMwzM; dLPUx: } goto DEIbN; QeR9a: $data["\144\x69\x67\x75\156\141\153\x61\156"] = $count_terpakai; goto nwMgn; NjNAY: $data["\x73\164\141\164\165\163"] = $hapusNilaiSiswa && $hapusDurasiSiswa; goto yqyZr; JAsPp: goto tiGCE; goto wtGZh; SIOK8: goto J3BaU; goto qQa_W; w64Gw: $this->load->model("\114\x6f\x67\137\155\157\144\x65\x6c", "\x6c\157\x67\147\x69\x6e\147"); goto mMhCi; ZdiN0: $data["\155\x65\x73\163\141\x67\145"] = "\112\x61\144\167\x61\x6c\40\125\x6a\151\x61\156\40\163\x65\x64\x61\156\x67\40\144\x69\x67\x75\156\x61\x6b\141\156"; goto JAsPp; qQa_W: Cd4bq: goto k5PSk; q9VMS: if ($this->master->delete("\143\142\x74\x5f\x6a\x61\144\x77\141\154", $arrId, "\151\x64\137\x6a\x61\144\x77\x61\154")) { goto P0_3d; } goto L5zxI; Y7Z27: $this->output_json($data); goto R_37J; DEIbN: j6cHg: goto T7WkA; mMhCi: $arrId = json_decode($this->input->post("\143\x68\145\143\x6b\x65\144", true)); goto YHmW3; R_37J: } }