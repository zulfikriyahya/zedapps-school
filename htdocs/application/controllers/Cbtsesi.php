<?php
class Cbtsesi extends CI_Controller { public function __construct() { goto tC0HO; OqwJr: $this->load->model("\x4d\x61\163\x74\145\162\137\155\157\x64\145\154", "\x6d\x61\163\x74\145\162"); goto C4X27; Ag9fj: if (!$this->ion_auth->logged_in()) { goto Q7lxe; } goto idPoH; tC0HO: parent::__construct(); goto Ag9fj; S5vKn: redirect("\x61\165\164\x68"); goto dHfzb; C4X27: $this->load->model("\104\141\x73\x68\x62\157\x61\162\x64\137\x6d\x6f\144\145\154", "\x64\x61\163\150\x62\157\141\162\x64"); goto qYNPj; pCMbz: goto k3M2p; goto A7U4d; Y2dHC: $this->load->library(["\x64\141\x74\141\x74\x61\x62\x6c\145\163", "\x66\x6f\x72\155\x5f\x76\141\154\x69\144\141\x74\x69\x6f\156"]); goto OqwJr; idPoH: if ($this->ion_auth->is_admin()) { goto Dsd8D; } goto sBQAD; sBQAD: show_error("\x48\141\156\x79\141\40\x41\x64\155\x69\156\x69\x73\164\x72\141\164\x6f\x72\40\171\141\x6e\147\40\144\151\x62\x65\x72\x69\x20\x68\x61\x6b\x20\165\156\x74\x75\153\x20\x6d\145\156\x67\141\153\x73\145\x73\x20\x68\x61\154\x61\x6d\141\156\x20\151\x6e\x69\54\x20\x3c\141\x20\x68\x72\x65\146\x3d\42" . base_url("\x64\x61\163\x68\x62\x6f\x61\162\x64") . "\x22\x3e\113\145\155\x62\x61\x6c\151\40\153\145\40\x6d\145\156\165\x20\x61\x77\141\x6c\x3c\x2f\x61\x3e", 403, "\x41\153\x73\x65\163\40\x54\145\x72\x6c\x61\x72\x61\156\x67"); goto HqDDo; qYNPj: $this->load->model("\x43\142\x74\x5f\x6d\x6f\x64\145\x6c", "\x63\x62\x74"); goto PtOg8; HqDDo: Dsd8D: goto pCMbz; PtOg8: $this->form_validation->set_error_delimiters('', ''); goto iwhBr; A7U4d: Q7lxe: goto S5vKn; dHfzb: k3M2p: goto Y2dHC; iwhBr: } public function output_json($data, $encode = true) { goto mT5_6; vV0BF: BZ2B5: goto dZJa4; dZJa4: $this->output->set_content_type("\x61\160\x70\x6c\151\x63\x61\164\151\x6f\x6e\57\152\x73\x6f\x6e")->set_output($data); goto uFcjH; mT5_6: if (!$encode) { goto BZ2B5; } goto GpzGg; GpzGg: $data = json_encode($data); goto vV0BF; uFcjH: } public function index() { goto lxWy5; gpexU: $this->load->view("\x5f\x74\x65\155\x70\154\141\x74\x65\x73\x2f\144\141\x73\150\x62\157\141\162\144\57\137\146\x6f\157\x74\x65\x72"); goto ZZJ2b; FK1sX: $data["\x74\x70\x5f\141\x63\x74\151\166\x65"] = $this->dashboard->getTahunActive(); goto HXbLr; LklGR: $data["\164\160"] = $this->dashboard->getTahun(); goto FK1sX; HRLJP: $data = ["\x75\163\x65\162" => $user, "\x6a\165\144\165\x6c" => "\x53\x65\x73\x69\x20\125\x6a\x69\141\156", "\x73\165\x62\x6a\x75\144\x75\154" => "\104\141\x74\141\x20\123\145\163\151\x20\125\152\151\141\x6e", "\x70\162\x6f\x66\151\x6c\145" => $this->dashboard->getProfileAdmin($user->id), "\x73\145\x74\x74\x69\156\147" => $this->dashboard->getSetting()]; goto LklGR; lxWy5: $user = $this->ion_auth->user()->row(); goto HRLJP; nUd7b: $this->load->view("\x63\x62\164\x2f\x73\x65\x73\x69\57\x64\x61\164\x61"); goto gpexU; mozHW: $this->load->view("\x5f\164\x65\x6d\160\x6c\x61\164\145\163\57\144\141\x73\x68\142\157\x61\162\144\x2f\x5f\150\145\x61\x64\145\x72", $data); goto nUd7b; HXbLr: $data["\x73\155\x74"] = $this->dashboard->getSemester(); goto w1uXq; w1uXq: $data["\163\155\164\137\141\143\164\x69\x76\145"] = $this->dashboard->getSemesterActive(); goto mozHW; ZZJ2b: } public function data() { $this->output_json($this->cbt->getSesi(), false); } public function add() { goto Iv13F; Iv13F: $insert = ["\x6e\x61\x6d\x61\137\x73\145\x73\x69" => $this->input->post("\x6e\x61\155\x61\137\163\145\163\x69", true), "\x6b\157\x64\145\137\x73\145\x73\x69" => $this->input->post("\153\157\x64\145\137\x73\x65\163\151", true), "\167\141\153\164\165\x5f\x6d\165\154\141\x69" => $this->input->post("\167\x61\153\x74\x75\x5f\x6d\165\154\x61\x69", true), "\x77\141\153\164\x75\x5f\141\153\x68\151\162" => $this->input->post("\x77\x61\153\x74\x75\137\141\x6b\150\151\x72", true)]; goto uX1Fb; uX1Fb: $this->master->create("\x63\142\x74\x5f\x73\145\x73\x69", $insert, false); goto r8pHu; r8pHu: $data["\x73\x74\141\164\165\x73"] = $insert; goto h1R3r; h1R3r: $this->output_json($data); goto HbVqY; HbVqY: } public function update() { $data = $this->cbt->updateSesi(); $this->output->set_content_type("\x61\x70\160\154\x69\143\x61\164\x69\157\156\57\152\x73\157\156")->set_output($data); } public function edit($id) { goto QGRUx; YbHzA: $this->load->view("\137\x74\x65\x6d\160\x6c\141\x74\145\163\x2f\144\141\163\x68\142\157\x61\x72\x64\57\x5f\150\x65\x61\144\145\x72", $data); goto lgHz6; DueFN: $data["\164\x70\x5f\x61\x63\x74\x69\166\x65"] = $tp; goto Dqd44; qVowi: $smt = $this->dashboard->getSemesterActive(); goto TrjPf; r2e1B: $data["\x73\x6d\164\x5f\141\143\x74\x69\x76\145"] = $smt; goto c4FZl; QGRUx: $tp = $this->dashboard->getTahunActive(); goto qVowi; TrjPf: $data["\x74\x70"] = $this->dashboard->getTahun(); goto DueFN; Dqd44: $data["\163\x6d\x74"] = $this->dashboard->getSemester(); goto r2e1B; CJ_nS: $this->load->view("\137\x74\145\155\x70\x6c\x61\164\x65\163\x2f\x64\141\x73\150\x62\x6f\141\x72\144\x2f\x5f\146\x6f\x6f\164\145\x72"); goto dXEF5; c4FZl: $data = ["\165\x73\x65\x72" => $this->ion_auth->user()->row(), "\152\x75\144\165\x6c" => "\123\x65\x73\x69\40\x53\151\163\167\x61", "\x73\165\142\x6a\165\x64\165\154" => "\101\164\x75\162\40\x53\x65\163\x69\40\x53\x69\163\x77\141", "\163\x65\x73\151" => $this->cbt->getSesiById($id)]; goto YbHzA; lgHz6: $this->load->view("\143\x62\164\57\163\145\163\151\x2f\x65\144\x69\x74"); goto CJ_nS; dXEF5: } public function delete() { goto C2PwL; Xj2zd: ca2JR: goto pawl_; C2PwL: $chk = $this->input->post("\x63\x68\x65\143\153\145\144", true); goto TLLjQ; mRsDv: kMGT3: goto HZsIw; xZm2u: goto kMGT3; goto Xj2zd; TLLjQ: if (!$chk) { goto ca2JR; } goto zRtvd; qOiBg: $this->output_json(["\x73\164\x61\164\165\163" => true, "\x74\157\x74\141\x6c" => count($chk)]); goto SPdPU; pawl_: $this->output_json(["\163\x74\x61\x74\165\x73" => false]); goto mRsDv; zRtvd: if (!$this->master->delete("\x63\142\x74\x5f\x73\145\163\151", $chk, "\x69\x64\x5f\163\x65\x73\151")) { goto GQD4Q; } goto qOiBg; SPdPU: GQD4Q: goto xZm2u; HZsIw: } public function sesisiswa() { goto QT8yc; zBL52: $this->load->view("\137\x74\145\x6d\160\x6c\141\164\x65\x73\57\x64\x61\163\x68\x62\157\141\162\x64\x2f\x5f\x68\145\x61\144\145\x72", $data); goto oXXSt; nomsm: $this->load->view("\x5f\164\x65\155\160\154\x61\164\145\x73\x2f\144\x61\x73\150\x62\157\x61\162\144\57\x5f\x66\157\157\164\x65\162"); goto LRUqC; tTWN0: $data["\x73\155\x74"] = $this->dashboard->getSemester(); goto ZeE2q; lfc4C: $data["\164\160\137\141\143\x74\151\166\x65"] = $this->dashboard->getTahunActive(); goto tTWN0; ZeE2q: $data["\163\x6d\x74\137\x61\143\x74\x69\166\145"] = $this->dashboard->getSemesterActive(); goto zBL52; LZ7EN: $data["\164\160"] = $this->dashboard->getTahun(); goto lfc4C; oXXSt: $this->load->view("\x63\x62\x74\x2f\163\x65\x73\x69\x73\151\163\x77\141\x2f\144\141\x74\x61"); goto nomsm; QT8yc: $data = ["\165\x73\145\162" => $this->ion_auth->user()->row(), "\152\x75\x64\165\x6c" => "\123\145\x73\x69\x20\x55\x6a\151\141\156", "\163\165\142\152\x75\144\165\x6c" => "\x44\x61\164\x61\40\x53\x65\163\x69\40\x55\152\151\x61\156"]; goto LZ7EN; LRUqC: } }