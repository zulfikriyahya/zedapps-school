<?php
defined("\102\101\123\x45\120\x41\x54\x48") or exit("\116\x6f\x20\144\151\x72\x65\143\164\x20\x73\x63\x72\151\x70\164\x20\141\x63\143\145\163\163\x20\141\154\154\157\x77\145\144"); class Update extends CI_Controller { function __construct() { goto Lh2X8; LJQ2n: $this->load->database(); goto SOjR4; SOjR4: $this->load->library("\145\x6e\x63\x72\171\160\x74\x69\x6f\156"); goto NIh1t; TBeP1: $this->load->dbforge(); goto LJQ2n; Lh2X8: parent::__construct(); goto jUFD0; jUFD0: include APPPATH . "\143\157\x6e\x66\151\147\x2f\x64\141\x74\141\142\141\x73\x65\x2e\160\x68\x70"; goto TBeP1; NIh1t: } public function output_json($data, $encode = true) { goto rK037; d2tn0: $data = json_encode($data); goto crBRL; rK037: if (!$encode) { goto br_ST; } goto d2tn0; w0Q7G: $this->output->set_content_type("\x61\x70\160\154\151\x63\x61\x74\x69\x6f\x6e\x2f\x6a\163\157\x6e")->set_output($data); goto Cn9Sc; crBRL: br_ST: goto w0Q7G; Cn9Sc: } public function index() { goto glvyZ; nAtiQ: $this->load->view("\151\x6e\163\x74\141\x6c\154\57\x75\x70\x64\x61\x74\145"); goto raAC8; csSM2: $json = (array) $json; goto IDqlh; raAC8: $this->load->view("\x69\x6e\163\x74\x61\x6c\x6c\57\146\x6f\157\164\145\162"); goto CAcTI; glvyZ: $json = file_get_contents("\56\57\141\x73\x73\x65\164\163\57\x61\160\160\57\144\x62\57\x64\141\164\141\x62\141\163\x65\56\x6a\x73\x6f\156"); goto D15m7; D15m7: $json = json_decode($json); goto csSM2; Su9kT: $this->load->view("\x69\x6e\x73\x74\x61\x6c\154\57\x68\145\141\x64\x65\x72", $data); goto nAtiQ; IDqlh: $data["\152\x73\x6f\x6e"] = $json; goto Su9kT; CAcTI: } function object_to_array($data) { goto P5S3W; TmVhP: return $result; goto kQKlQ; u3gal: $result = []; goto eR7hh; Vyx8m: OZFTi: goto TmVhP; kQKlQ: oGKfz: goto kVBfT; P5S3W: if (!(is_array($data) || is_object($data))) { goto oGKfz; } goto u3gal; eR7hh: foreach ($data as $key => $value) { $result[$key] = is_array($data) || is_object($data) ? $this->object_to_array($value) : $value; OLxj1: } goto Vyx8m; kVBfT: return $data; goto S5UMG; S5UMG: } public function checkDatabase() { goto u_CLC; UjUxH: $json = file_get_contents("\x2e\x2f\x61\x73\x73\x65\164\163\57\141\x70\x70\57\144\142\x2f\144\x61\x74\141\x62\141\163\x65\x2e\152\163\x6f\x6e"); goto wzM6_; zS6KA: $data = ["\x64\x62" => $fields, "\143\x72\145\141\x74\x65" => $create_tables, "\155\x6f\x64\x69\146\171" => $edit_columns, "\141\144\144" => $add_columns, "\143\157\x75\x6e\164\163" => $counts, "\152\x73\157\x6e" => $json, "\x63\165\x72\162\145\x6e\164" => $currentDb]; goto A1f16; WP_XB: $full_tables = array_unique($full_tables); goto wFOSv; x8eDJ: foreach ($tabless as $table) { goto oo8Xl; myIEZ: Nvkq3: goto L_xIN; qxNVB: $datafld[$i]->extra = $query[$i]->extra; goto iI5t4; HLTDs: $fields[$table] = $datafld; goto myIEZ; Ajzaz: Mc836: goto cQh0J; P6Vbh: pUZ1q: goto Ajzaz; dMHAX: if (!($query[$i]->extra != '')) { goto Mc836; } goto fkM1e; zAkKO: $sql = "\x53\x45\x4c\105\x43\x54\40\140\x63\x6f\154\x75\x6d\x6e\x5f\156\141\x6d\145\x60\54\x20\140\156\x75\155\x65\162\x69\x63\x5f\x70\x72\145\143\151\x73\x69\157\x6e\140\54\x20\140\145\x78\164\x72\141\140\54\40\140\151\x73\137\156\x75\x6c\x6c\x61\x62\x6c\x65\140" . "\40\106\x52\x4f\115\40\x60\151\x6e\x66\x6f\x72\155\x61\x74\151\x6f\x6e\x5f\x73\143\x68\x65\155\x61\140\56\x60\x63\157\154\165\x6d\x6e\x73\x60\x20\127\x48\105\x52\x45\x20\x74\141\142\154\x65\x5f\x73\143\150\145\x6d\141\40\x3d\40\42" . $this->db->database . "\42\40\x41\116\104\x20\164\141\x62\x6c\x65\x5f\156\141\x6d\145\40\x3d\x20\42" . $table . "\x22"; goto wSgtN; GYDHr: $i = 0; goto mT7xS; PFDjs: goto o9bnP; goto yTmlW; W8ojv: if (!($datafld[$i]->name == $query[$i]->column_name)) { goto WreuG; } goto dMHAX; cQh0J: WreuG: goto GuK7p; fKZFi: $currentDb = FALSE; goto tocOJ; tocOJ: gMCP1: goto NizIq; KJtvZ: o9bnP: goto aB1fZ; NizIq: $query = $query->result_object(); goto zAsx4; BJwYs: $retval[$i]->extra = $query[$i]->extra; goto tQzTN; YQobd: $i++; goto PFDjs; fkM1e: if ($query[$i]->extra == "\141\x75\x74\x6f\x5f\x69\x6e\143\162\x65\x6d\x65\x6e\164") { goto i2x3g; } goto qxNVB; mT7xS: $c = count($query); goto KJtvZ; GuK7p: $retval[$i] = new stdClass(); goto VPhoq; oo8Xl: $datafld = $this->db->field_data($table); goto zAkKO; tQzTN: yJJ_J: goto YQobd; b4jrc: $datafld[$i]->auto_increment = true; goto P6Vbh; zAsx4: $retval = array(); goto GYDHr; yTmlW: AFwrI: goto AiMHy; i5b8U: i2x3g: goto b4jrc; aB1fZ: if (!($i < $c)) { goto AFwrI; } goto W8ojv; AiMHy: $currentDb[$table] = $retval; goto HLTDs; wSgtN: if (!(($query = $this->db->query($sql)) === FALSE)) { goto gMCP1; } goto fKZFi; VPhoq: $retval[$i]->name = $query[$i]->column_name; goto BJwYs; iI5t4: goto pUZ1q; goto i5b8U; L_xIN: } goto eQK3A; hJGOE: $fields = []; goto D3fMP; GpWaq: bZqrU: goto mpkFZ; jjTDZ: $tabless = $this->db->list_tables(); goto hJGOE; qmHrE: $json = (array) $json; goto hmdZ0; xM11M: $tbl_ada = array_keys($fields); goto j7xec; tvkUx: $create_tables = []; goto WXbm2; j7xec: $full_tables = array_merge($tbl_baru, $tbl_ada); goto WP_XB; A1f16: $this->output_json($data); goto RacnK; eQK3A: znF_h: goto UjUxH; illPA: foreach ($full_tables as $table) { goto YbD7u; o8jG0: goto FEt1i; goto diK2j; Tx0gZ: MKaqq: goto t0FMN; kyJS7: G6XWy: goto BlyBr; Yx6Ab: if (!isset($json[$table])) { goto MKaqq; } goto PN_XC; YbD7u: if ($this->db->table_exists($table)) { goto YBDDS; } goto q4eF1; t0FMN: FEt1i: goto kyJS7; PN_XC: foreach ($json[$table] as $jtbl) { goto iEns6; pVGFG: foreach ($fields[$table] as $ftbl) { goto hWVO0; hWVO0: if (!($jtbl->name == $ftbl->name)) { goto y6mxy; } goto WVp9Z; IKNEj: $edit_columns[$table][] = $jtbl; goto Pk3dS; WVp9Z: if (!($jtbl->default != $ftbl->default || $jtbl->max_length != $ftbl->max_length || $jtbl->type != $ftbl->type)) { goto jaidJ; } goto IKNEj; Pk3dS: jaidJ: goto DtBI3; ROO_u: QpS0P: goto AIvEN; DtBI3: y6mxy: goto ROO_u; AIvEN: } goto Q4w8n; qJgLt: zOoVU: goto vTxZT; Zmy22: fkyzt: goto pVGFG; iEns6: if ($this->db->field_exists($jtbl->name, $table)) { goto fkyzt; } goto qbtFY; rcSQD: goto f3CBk; goto Zmy22; Q4w8n: ozWqz: goto uyP8V; uyP8V: f3CBk: goto qJgLt; qbtFY: $add_columns[$table][] = $jtbl; goto rcSQD; vTxZT: } goto nsYj1; diK2j: YBDDS: goto Yx6Ab; nsYj1: GFtc8: goto Tx0gZ; q4eF1: $create_tables[$table] = $json[$table]; goto o8jG0; BlyBr: } goto GpWaq; wzM6_: $json = json_decode($json); goto qmHrE; D3fMP: $currentDb = []; goto x8eDJ; KfkxI: $this->db->db_debug = FALSE; goto jjTDZ; hmdZ0: $tbl_baru = array_keys($json); goto xM11M; mpkFZ: $counts = count($create_tables) + count($add_columns) + count($edit_columns); goto zS6KA; wFOSv: sort($full_tables); goto tvkUx; WXbm2: $add_columns = []; goto FYJM0; FYJM0: $edit_columns = []; goto illPA; u_CLC: $db_debug = $this->db->db_debug; goto KfkxI; RacnK: } public function updateDatabase() { goto DhEOX; n5gEH: $json = (array) $json; goto qYrNX; u_4Jw: foreach ($tabless as $table) { $fields[$table] = $this->db->field_data($table); g92mF: } goto TBeDN; kVi6d: $tbl_ada = array_keys($fields); goto pg0zu; nug4P: $full_tables = array_unique($full_tables); goto ze8Jy; mgjFN: echo true; goto g2iTk; pg0zu: $full_tables = array_merge($tbl_baru, $tbl_ada); goto nug4P; hFIn6: f3x41: goto mgjFN; TMSth: $json = file_get_contents("\x2e\x2f\x61\x73\163\x65\x74\x73\57\x61\160\160\x2f\144\x62\x2f\144\141\x74\141\x62\x61\x73\145\x2e\152\x73\x6f\156"); goto X4cjI; UVbQq: $fields = []; goto u_4Jw; XI4nk: foreach ($full_tables as $table) { goto c3N6s; Nir4x: LMkr1: goto O6STL; IuSoR: if (!isset($json[$table])) { goto LMkr1; } goto RqwKy; TwM0s: goto jshXh; goto EkhE2; f92w_: $this->db->query("\101\114\x54\x45\x52\x20\x54\101\x42\114\105\40\40\140" . $table . "\140\x20\x45\x4e\107\111\x4e\x45\40\x3d\x20\x49\x6e\156\x6f\104\x42"); goto OGDZ3; SHj2Q: uJCBc: goto tLrCh; utrzQ: foreach ($json[$table] as $tbl => $jtbl) { goto NepkX; EINzw: EGaXu: goto af0kJ; VMpFc: $this->dbforge->add_key($jtbl->name, true); goto LWV2V; wIsvl: $this->dbforge->add_field($field); goto vkV49; NepkX: $field = [$jtbl->name => ["\x74\171\x70\x65" => $jtbl->type, "\143\157\156\163\x74\x72\x61\x69\x6e\x74" => $jtbl->max_length, "\156\x75\154\154" => $jtbl->primary_key == 0]]; goto wIsvl; vkV49: if (!($jtbl->primary_key == 1)) { goto JvbuW; } goto VMpFc; LWV2V: JvbuW: goto EINzw; af0kJ: } goto Wfa0B; TZQgr: Tq7sz: goto Nir4x; c3N6s: if ($this->db->table_exists($table)) { goto OlpBb; } goto Zc4G7; Wfa0B: qUKi3: goto bUX6d; RqwKy: foreach ($json[$table] as $jtbl) { goto xhEOp; fZv3P: foreach ($fields[$table] as $ftbl) { goto qOFNc; ypMho: $field = array($jtbl->name => array("\x74\171\x70\x65" => $jtbl->type, "\143\x6f\x6e\x73\164\x72\x61\151\x6e\164" => $jtbl->max_length, "\x64\145\x66\x61\x75\154\164" => $jtbl->default)); goto PXKuP; s5pKr: khHZg: goto kZ72E; VjM5C: $field = array($jtbl->name . "\40\x64\x61\164\x65\x74\151\155\145\40\144\145\x66\x61\x75\154\164\x20\x63\165\x72\x72\145\x6e\164\137\164\151\x6d\x65\x73\164\x61\x6d\x70" . $onUpdate); goto s5pKr; y41Tz: if ($jtbl->primary_key == 0) { goto yCDBd; } goto nMdgG; PXKuP: goto khHZg; goto P7xKy; MZHLA: $field = array($jtbl->name => array("\164\x79\x70\145" => $jtbl->type, "\x63\x6f\x6e\x73\164\x72\141\151\156\x74" => $jtbl->max_length, "\156\165\x6c\154" => false)); goto nDtCf; AKbKH: v43aA: goto pgQb3; nMdgG: if ($jtbl->auto_increment == true) { goto iM5vq; } goto MZHLA; RvWFL: if ($jtbl->default == "\x43\125\x52\x52\105\116\124\x5f\x54\111\x4d\105\123\x54\x41\115\x50") { goto n4gjQ; } goto ypMho; tm3Ty: $field = array($jtbl->name => array("\164\x79\160\x65" => $jtbl->type, "\x63\157\156\163\x74\x72\x61\x69\156\164" => $jtbl->max_length, "\x6e\165\154\154" => false, "\x61\x75\164\157\x5f\x69\x6e\143\x72\145\155\145\x6e\x74" => true)); goto JVYwQ; t9Gy3: XZ82x: goto FrMiU; oUB41: if (!($jtbl->default != $ftbl->default || $jtbl->max_length != $ftbl->max_length || $jtbl->type != $ftbl->type)) { goto v43aA; } goto y41Tz; pgQb3: YC1Jc: goto t9Gy3; tj0vR: $this->dbforge->modify_column($table, $field); goto PWtu5; qOFNc: if (!($jtbl->name == $ftbl->name)) { goto YC1Jc; } goto oUB41; JVYwQ: WG2r9: goto LB1Cb; PWtu5: goto doV9i; goto o_ncf; LB1Cb: $this->dbforge->add_key($jtbl->name, true); goto tj0vR; ZL6G3: $onUpdate = isset($jtbl->extra) ? "\40" . strtolower($jtbl->extra ?? '') : ''; goto VjM5C; o_ncf: yCDBd: goto RvWFL; EdBjt: iM5vq: goto tm3Ty; kZ72E: $this->dbforge->modify_column($table, $field); goto KDYE3; nDtCf: goto WG2r9; goto EdBjt; KDYE3: doV9i: goto AKbKH; P7xKy: n4gjQ: goto ZL6G3; FrMiU: } goto HMgbj; bG9vU: mj_Y3: goto RZWoX; RZWoX: $field = array($jtbl->name => array("\164\x79\160\145" => $jtbl->type, "\x63\x6f\x6e\x73\x74\x72\141\151\x6e\164" => $jtbl->max_length, "\x64\x65\x66\141\165\x6c\x74" => $jtbl->default)); goto vD5iJ; xhEOp: if ($this->db->field_exists($jtbl->name, $table)) { goto Vrcnp; } goto PJZr6; WSfZ6: MSWU4: goto QqtR3; FPLl2: e6jJQ: goto WSfZ6; gXhRw: goto xy20z; goto bG9vU; FBtG2: $this->dbforge->add_key($jtbl->name, true); goto xnnMI; HMgbj: t2mCt: goto FPLl2; xnnMI: $this->dbforge->add_column($table, $field); goto gXhRw; vD5iJ: $this->dbforge->add_column($table, $field); goto fJ74B; PJZr6: if ($jtbl->primary_key == 0) { goto mj_Y3; } goto ZtzZs; fJ74B: xy20z: goto CGzBC; ZtzZs: $field = array($jtbl->name => array("\x74\x79\160\145" => $jtbl->type, "\143\x6f\156\163\x74\x72\x61\151\x6e\164" => $jtbl->max_length, "\x6e\165\x6c\154" => false)); goto FBtG2; VZsta: Vrcnp: goto fZv3P; CGzBC: goto e6jJQ; goto VZsta; QqtR3: } goto TZQgr; Zc4G7: if (!isset($json[$table])) { goto LqiDP; } goto utrzQ; OGDZ3: LqiDP: goto TwM0s; bUX6d: $this->dbforge->create_table($table, TRUE); goto f92w_; O6STL: jshXh: goto SHj2Q; EkhE2: OlpBb: goto IuSoR; tLrCh: } goto hFIn6; TBeDN: ws9yr: goto TMSth; ze8Jy: sort($full_tables); goto XI4nk; X4cjI: $json = json_decode($json); goto n5gEH; qYrNX: $tbl_baru = array_keys($json); goto kVi6d; DhEOX: $tabless = $this->db->list_tables(); goto UVbQq; g2iTk: } public function checkDb() { goto QR3RB; WfbIT: $full_tables = array_merge($tbl_seharusnya, $tbl_ada); goto HmEJt; uCq_q: $tbl_seharusnya = array_keys($json); goto osEe2; T4EEW: $json = (array) $json; goto uCq_q; injK6: $script_create_column = []; goto pferY; kjAuI: zZ_AV: goto FafQJ; FafQJ: $json = file_get_contents("\56\x2f\x61\163\163\x65\x74\163\x2f\141\160\160\x2f\144\x62\57\144\141\x74\x61\142\141\x73\x65\56\152\x73\x6f\x6e"); goto BkFTZ; Jd32m: $create_tables = []; goto z19GD; r7fEM: $script_edit_column = []; goto utGKO; bf1_h: $data = ["\146\x69\x65\154\x64\x73" => $fields, "\143\162\x65\141\x74\x65\x5f\x74\141\x62\x6c\145\x73" => $create_tables, "\143\157\x75\x6e\164\137\x74\142\154" => count($create_tables), "\x61\x64\x64\137\143\157\x6c\x75\x6d\156\163\x5f\x74\157\x5f\x74\x61\142\x6c\x65" => $add_columns, "\143\157\x75\156\x74\x5f\x63\157\154" => count($add_columns), "\145\144\x69\x74\x5f\x63\157\154\x75\155\x6e\163" => $edit_columns, "\x63\157\x75\156\164\x5f\155\157\x64" => count($edit_columns), "\x61\x64\x64\x5f\164\142\154" => $this->encryption->encrypt(json_encode($script_create_table)), "\141\x64\144\137\143\x6f\154" => $this->encryption->encrypt(json_encode($script_create_column)), "\x6d\157\x64\x5f\143\157\x6c" => $this->encryption->encrypt(json_encode($script_edit_column))]; goto E1z2I; QR3RB: $db_debug = $this->db->db_debug; goto oWwEg; osEe2: $tbl_ada = array_keys($fields); goto WfbIT; YDgPV: $this->db->db_debug = $db_debug; goto bf1_h; HmEJt: $full_tables = array_unique($full_tables); goto IHlP2; E1z2I: $this->output_json($data); goto PLmON; z19GD: $script_create_table = []; goto UXWXc; utGKO: foreach ($full_tables as $table) { goto f82y5; GB2K9: Hs3tG: goto mXBYT; mawX1: if (!(count($modif_column) > 0)) { goto VE2Wa; } goto uQMYJ; vzD_P: if (!(count($add_column) > 0)) { goto qaQz4; } goto UpRPr; sLDQy: $script = "\103\122\x45\101\x54\105\40\124\x41\x42\x4c\105\40\140" . $table . "\140\40\x28"; goto u7QIx; v5TEO: SwF3S: goto vzD_P; N60WE: $create_tables[] = $json[$table]; goto sLDQy; F6339: IHKRb: goto NHrKq; UpRPr: $script_create_column[$table] = "\x41\x4c\x54\x45\x52\40\124\101\102\114\x45\40\140" . $table . "\140\x20" . implode("\54\40", $add_column) . "\x3b"; goto Is9IE; u7QIx: $pri = ''; goto SOM18; Is9IE: qaQz4: goto mawX1; KfOGT: VVCIG: goto ezLjm; ezLjm: TGicU: goto XSSB0; SOM18: foreach ($json[$table]->columns as $column) { goto SVUdg; Y38Xr: qsCKx: goto DqyMK; g4qPI: o7n10: goto dGdog; Fdszz: if ($column->type == "\151\x6e\164") { goto AURdD; } goto yuS7A; vvUpj: $length = "\x28" . ($column->max_length + 1) . "\51"; goto g4qPI; Ua1Ad: $length = ''; goto NemRc; xPDh2: hP6bD: goto Fdszz; ulUoy: $script .= "\x60" . $column->name . "\x60\40" . $column->type . $length . $nullable . $default . $extra . $comment . "\54\x20"; goto BEbDd; KxJ3a: AURdD: goto vvUpj; SVUdg: if ($column->max_length == null) { goto qsCKx; } goto tPV1M; NemRc: goto G_PVO; goto Y38Xr; gGerE: GcI0l: goto h_4uL; DqyMK: $length = ''; goto YcYi9; tGHiT: $comment = $column->comment == '' ? '' : "\40\x43\x4f\x4d\115\105\x4e\x54\40\47" . $column->comment . "\x27"; goto ulUoy; cgbpF: $nullable = $column->nullable == "\x4e\117" ? "\40\116\117\x54\x20\x4e\125\x4c\x4c" : ''; goto ByJ9I; BEbDd: $pri .= $column->primary != '' ? "\x50\x52\x49\x4d\x41\x52\131\x20\x4b\x45\x59\x20\50\x60" . $column->name . "\x60\x29" : ''; goto gGerE; tPV1M: if ($column->type != "\154\157\x6e\147\164\x65\x78\164" && $column->type != "\155\x65\x64\151\165\155\x74\145\x78\x74" && $column->type != "\164\145\x78\164") { goto hP6bD; } goto Ua1Ad; dGdog: G_PVO: goto cgbpF; YcYi9: goto G_PVO; goto xPDh2; WBaDF: $extra = $column->extra == '' ? '' : "\40" . strtoupper($column->extra ?? ''); goto tGHiT; ByJ9I: $default = $column->default == null ? '' : "\x20\104\105\106\101\125\114\x54\x20" . $column->default; goto WBaDF; FOgzv: goto o7n10; goto KxJ3a; yuS7A: $length = "\50" . $column->max_length . "\x29"; goto FOgzv; h_4uL: } goto GB2K9; f82y5: if (!$this->db->table_exists($table)) { goto PFijv; } goto UwBNX; yJwqf: $script_create_table[$table] = $script; goto KfOGT; BkuBZ: foreach ($json[$table]->columns as $jtbl) { goto yrcOG; FjPTG: $nullable = $jtbl->nullable == "\116\x4f" ? "\40\116\x4f\124\40\x4e\x55\x4c\x4c" : ''; goto S15Jx; Lb07b: ve2wj: goto PRnom; UrQE4: fTABs: goto Dch8_; Wxh2B: goto HDYKb; goto UrQE4; SMDim: array_push($add_column, "\101\x44\104\x20\x60" . $jtbl->name . "\x60\40" . $jtbl->type . $length . $nullable . $default . $extra . $comment); goto H2_vz; PRnom: V0F6v: goto rKz30; QceXY: $comment = $jtbl->comment == '' ? '' : "\x20\103\x4f\115\115\105\116\124\x20\x27" . $jtbl->comment . "\x27"; goto SMDim; Dch8_: $length = "\x28" . ($jtbl->max_length + 1) . "\x29"; goto hjrGp; hjrGp: HDYKb: goto bVVk_; yrcOG: if ($this->db->field_exists($jtbl->name, $table)) { goto Xn1YT; } goto AhChJ; H2_vz: Xn1YT: goto rbXlQ; U1fiG: goto TPqND; goto v_4Vo; AhChJ: $add_columns[$table][] = $jtbl; goto iLyiy; Izbwc: T3_Us: goto utUYU; SqTh8: $extra .= "\x20\x50\122\x49\115\x41\122\x59\x20\113\105\131"; goto Ly0sl; S15Jx: $default = $jtbl->default == null ? '' : "\x20\104\x45\x46\x41\x55\114\x54\x20" . $jtbl->default; goto bXgO5; pDvdA: goto TPqND; goto Izbwc; rbXlQ: foreach ($fields[$table]->columns as $ftbl) { goto MSCep; sttj5: $ftbl->default = strtoupper($ftbl->default ?? ''); goto fhmfx; a2BU2: hOOLx: goto SdZxZ; eCCg4: $extra = $jtbl->extra == '' ? '' : "\40" . strtoupper($jtbl->extra ?? ''); goto raDaN; dpnoE: GYZEN: goto cGfLU; hfZAo: if (!($jtbl->default != null)) { goto o6bab; } goto CPB2C; Wnaxh: goto Es8k4; goto a2BU2; i7hjL: if (!($ftbl->extra != null)) { goto RHAkZ; } goto yewqo; WOsB2: if (!($jtbl->comment != $ftbl->comment)) { goto KI40b; } goto lEn88; NBO3I: if (!($jtbl->col_type != $ftbl->col_type || $jtbl->nullable != $ftbl->nullable || $jtbl->default != $ftbl->default || $jtbl->extra != $ftbl->extra || $jtbl->comment != $ftbl->comment)) { goto GYZEN; } goto iXPTi; UWkSf: $ftbl->default = str_replace("\50\x29", '', $ftbl->default ?? ''); goto sttj5; Sxwc8: $edit_columns[$table][$jtbl->name]["\x65\x78\x74\x72\141"] = $jtbl->extra; goto OAmY1; z2st5: if (!($jtbl->primary != $ftbl->primary)) { goto B1PdF; } goto FA0XH; SdZxZ: array_push($modif_column, "\x41\104\104\40\x55\116\x49\x51\x55\105\x20\x4b\x45\131\x20\x60" . $jtbl->name . "\x60\x20\50\140" . $jtbl->name . "\140\51"); goto jy9X9; jy9X9: Es8k4: goto EWFeP; wmEqE: o6bab: goto HIFwi; Y_QvS: array_push($modif_column, "\x4d\117\x44\x49\106\x59\40\x60" . $jtbl->name . "\140\40" . $jtbl->col_type . $nullable . $default . $extra . $comment); goto dpnoE; raDaN: $comment = $jtbl->comment == '' ? '' : "\x20\x43\117\x4d\x4d\x45\x4e\x54\40\47" . $jtbl->comment . "\47"; goto Y_QvS; MSCep: if (!($jtbl->name == $ftbl->name)) { goto rucPp; } goto x3Clm; w95tU: $ftbl->extra = strtoupper($ftbl->extra ?? ''); goto A2iD7; H74SS: if (strtolower($jtbl->primary ?? '') == "\165\x6e\x69") { goto hOOLx; } goto hZEMg; cGfLU: rucPp: goto ufoOo; Ev1Sg: $default = $jtbl->default == null ? '' : "\x20\x44\105\106\101\x55\x4c\124\40" . $jtbl->default; goto eCCg4; Gfere: if (!($jtbl->extra != null)) { goto vhJke; } goto bjt4L; qtcpW: $edit_columns[$table][$jtbl->name]["\143\x6f\x6c\x5f\164\171\x70\145"] = $jtbl->col_type; goto DBVOQ; ufoOo: OnLMz: goto I6Vqa; ConP3: if (!($jtbl->default != $ftbl->default)) { goto DBJMr; } goto aDJzt; OAmY1: vl3P3: goto WOsB2; fhmfx: sSd__: goto ConP3; A2iD7: RHAkZ: goto z3Pm0; LWlF0: array_push($modif_column, "\101\104\x44\40\x50\122\111\115\x41\122\131\40\113\105\x59\40\50\x60" . $jtbl->name . "\140\x29"); goto Wnaxh; EWFeP: B1PdF: goto NBO3I; bjt4L: $jtbl->extra = str_replace("\x28\x29", '', $jtbl->extra ?? ''); goto IztrS; lEn88: $edit_columns[$table][$jtbl->name]["\143\x6f\x6d\155\145\156\164"] = $jtbl->comment; goto JvbDb; iXPTi: $nullable = $jtbl->nullable == "\x4e\117" ? "\40\x4e\x4f\124\40\116\x55\114\x4c" : ''; goto Ev1Sg; FA0XH: $edit_columns[$table][$jtbl->name]["\x70\x72\151\x6d\x61\162\171"] = $jtbl->primary; goto aACU8; yewqo: $ftbl->extra = str_replace("\50\51", '', $ftbl->extra ?? ''); goto w95tU; PvM_v: if (!($jtbl->nullable != $ftbl->nullable)) { goto IpZDU; } goto apsyF; u5AIk: SEbym: goto LWlF0; apsyF: $edit_columns[$table][$jtbl->name]["\156\x75\154\154\x61\x62\154\145"] = $jtbl->nullable; goto VPUXn; EiAds: DBJMr: goto Gfere; aDJzt: $edit_columns[$table][$jtbl->name]["\x64\x65\146\x61\x75\154\164"] = $jtbl->default; goto EiAds; x3Clm: if (!($jtbl->col_type != $ftbl->col_type)) { goto ae6Kq; } goto qtcpW; jdQyE: vhJke: goto i7hjL; VPUXn: IpZDU: goto hfZAo; DBVOQ: ae6Kq: goto PvM_v; z3Pm0: if (!($jtbl->extra != $ftbl->extra)) { goto vl3P3; } goto Sxwc8; IztrS: $jtbl->extra = strtoupper($jtbl->extra ?? ''); goto jdQyE; aACU8: if (strtolower($jtbl->primary ?? '') == "\160\x72\151") { goto SEbym; } goto H74SS; CPB2C: $jtbl->default = str_replace("\50\x29", '', $jtbl->default ?? ''); goto yAnAl; yAnAl: $jtbl->default = strtoupper($jtbl->default ?? ''); goto wmEqE; HIFwi: if (!($ftbl->default != null)) { goto sSd__; } goto UWkSf; hZEMg: goto Es8k4; goto u5AIk; JvbDb: KI40b: goto z2st5; I6Vqa: } goto Lb07b; CIL8t: $length = ''; goto pDvdA; iLyiy: if ($jtbl->max_length == null) { goto T3_Us; } goto iIDQp; bVVk_: TPqND: goto FjPTG; DBycM: if (!(strtoupper($extra ?? '') == "\x20\x41\125\124\117\137\x49\116\x43\122\x45\115\x45\x4e\124")) { goto pnEyK; } goto SqTh8; utUYU: $length = ''; goto U1fiG; v_4Vo: WbkD8: goto yBEsQ; reKNH: $length = "\x28" . $jtbl->max_length . "\51"; goto Wxh2B; bXgO5: $extra = $jtbl->extra == '' ? '' : "\x20" . strtoupper($jtbl->extra ?? ''); goto DBycM; Ly0sl: pnEyK: goto QceXY; iIDQp: if ($jtbl->type != "\x6c\157\156\x67\164\x65\x78\164" && $jtbl->type != "\x6d\145\x64\151\x75\155\164\x65\x78\164" && $jtbl->type != "\164\145\x78\164") { goto WbkD8; } goto CIL8t; yBEsQ: if ($jtbl->type == "\151\x6e\164") { goto fTABs; } goto reKNH; rKz30: } goto v5TEO; G1td8: PFijv: goto N60WE; NHrKq: goto VVCIG; goto G1td8; H1Z_Q: $modif_column = []; goto BkuBZ; mXBYT: $script .= $pri . "\51\40\x45\116\x47\x49\x4e\105\75\x49\156\156\x6f\104\x42\40\x44\105\106\x41\x55\x4c\x54\x20\103\x48\101\x52\123\x45\124\75\165\x74\146\70\155\142\x34\73"; goto yJwqf; UwBNX: if (!isset($json[$table])) { goto IHKRb; } goto hL490; uQMYJ: $script_edit_column[$table] = "\101\x4c\x54\105\x52\x20\124\x41\102\114\x45\40\140" . $table . "\140\40" . implode("\54\x20", $modif_column) . "\x3b"; goto Z0kek; Z0kek: VE2Wa: goto F6339; hL490: $add_column = []; goto H1Z_Q; XSSB0: } goto T0H7I; T0H7I: u0b0b: goto YDgPV; oWwEg: $this->db->db_debug = FALSE; goto xOGzB; BkFTZ: $json = json_decode($json); goto T4EEW; mZRFl: foreach ($tabless as $table) { goto Jzx_3; I2eTJ: $retval[$i]->nullable = $query[$i]->is_nullable; goto gEhFr; dwZc2: $query = $query->result_object(); goto ozdFS; DiuSZ: $fields = FALSE; goto O8HM1; ozdFS: $retval = array(); goto KYJgf; Jzx_3: $sql = "\x53\105\114\x45\x43\124\40\140\x63\157\x6c\x75\155\156\x5f\156\141\x6d\x65\140\54\40\140\143\x6f\x6c\165\x6d\x6e\137\164\171\x70\145\x60\54\x20\x60\x63\x6f\154\154\x61\164\151\x6f\x6e\137\156\141\155\x65\x60\x2c\x20\x60\x64\x61\x74\x61\137\164\171\x70\145\x60\x2c\x20\x60\143\150\141\x72\x61\x63\x74\145\x72\x5f\x6d\x61\x78\x69\x6d\x75\x6d\137\x6c\145\x6e\147\x74\150\x60\54\40\140\156\165\x6d\145\x72\x69\143\x5f\x70\x72\x65\x63\151\163\x69\x6f\156\140\x2c" . "\40\140\x63\x6f\x6c\x75\155\x6e\x5f\x64\x65\x66\x61\165\x6c\x74\140\x2c\x20\140\x63\x6f\x6c\x75\x6d\156\137\153\145\171\x60\x2c\40\x60\143\157\x6c\165\155\x6e\x5f\143\x6f\x6d\155\145\156\164\140\x2c\40\140\145\x78\164\162\x61\x60\x2c\x20\140\x69\163\x5f\156\165\154\x6c\141\x62\154\145\x60\15\12\11\x9\11\x46\x52\117\115\x20\140\151\156\146\x6f\162\155\x61\x74\x69\x6f\156\x5f\x73\x63\150\x65\155\141\x60\x2e\x60\x63\x6f\154\x75\155\156\x73\x60\x20\x57\110\x45\122\x45\40\x74\141\x62\x6c\145\x5f\x73\x63\x68\x65\x6d\x61\40\75\x20\42" . $this->db->database . "\x22\40\x41\116\x44\x20\x74\x61\x62\x6c\145\137\156\141\155\145\40\x3d\40\x22" . $table . "\x22"; goto OX34i; ueBDf: $retval[$i]->col_type = $query[$i]->column_type; goto lGQIS; p8pFY: $i++; goto Wpdv0; lwzzn: $fields[$table] = (object) ["\x74\141\142\x6c\x65\137\156\141\x6d\145" => $table, "\x63\x6f\x6c\x75\155\156\x73" => $retval]; goto QqY3B; KYJgf: $i = 0; goto CzITx; VUY6V: nRUCA: goto lwzzn; QqY3B: PHQMk: goto GlPDm; lMl56: CJltR: goto p8pFY; QuEn2: $retval[$i]->default = $query[$i]->column_default; goto wHgRc; rWnM2: $retval[$i] = new stdClass(); goto v0nQB; MyVT6: $retval[$i]->extra = $query[$i]->extra; goto I2eTJ; VjsbC: if (!($i < $c)) { goto nRUCA; } goto rWnM2; n0otW: $retval[$i]->collation = $query[$i]->collation_name; goto Eg74j; gEhFr: $retval[$i]->primary = $query[$i]->column_key; goto lMl56; wHgRc: $retval[$i]->comment = $query[$i]->column_comment; goto MyVT6; CzITx: $c = count($query); goto kubuw; O8HM1: ulZ6E: goto dwZc2; Eg74j: $retval[$i]->max_length = $query[$i]->character_maximum_length > 0 ? $query[$i]->character_maximum_length : $query[$i]->numeric_precision; goto QuEn2; OX34i: if (!(($query = $this->db->query($sql)) === FALSE)) { goto ulZ6E; } goto DiuSZ; Wpdv0: goto csJCZ; goto VUY6V; kubuw: csJCZ: goto VjsbC; v0nQB: $retval[$i]->name = $query[$i]->column_name; goto ueBDf; lGQIS: $retval[$i]->type = $query[$i]->data_type; goto n0otW; GlPDm: } goto kjAuI; UXWXc: $add_columns = []; goto injK6; IHlP2: sort($full_tables); goto Jd32m; pferY: $edit_columns = []; goto r7fEM; FJqe3: $fields = []; goto mZRFl; xOGzB: $tabless = $this->db->list_tables(); goto FJqe3; PLmON: } public function createTable() { goto wKOJD; YXzKL: $this->output_json($data); goto qc9lI; It_ZO: $queries = ''; goto OIOBt; qpigz: str_replace("\x25\x32\102", "\53", $scripts ?? ''); goto mAad7; t6RKn: fyelH: goto Q0qpI; OIOBt: foreach ($scripts as $script) { $queries .= $script; wglQ9: } goto t6RKn; wKOJD: $scripts = $this->input->post("\x64\x61\164\141", true); goto qpigz; Wj21S: $scripts = json_decode($this->encryption->decrypt($scripts)); goto It_ZO; DoNpY: $data["\155\x65\163\x73\141\147\x65"] = "\125\160\x64\x61\164\145\x20\153\x6f\154\157\155"; goto YXzKL; mAad7: sleep(1); goto Wj21S; Q0qpI: $data["\163\165\x63\x63\145\163\163"] = $this->runQuery($queries); goto DoNpY; qc9lI: } public function createColumn() { goto neFUB; J9f19: $data["\x6d\145\x73\x73\x61\x67\145"] = "\x4d\157\144\151\x66\x79\x20\x6b\x6f\154\x6f\155"; goto zH_pv; TBUlG: $queries = ''; goto VX20H; neFUB: $scripts = $this->input->post("\144\x61\164\x61", true); goto fEi0G; EyWW9: $this->updateUID(); goto S0Nyi; O5mwW: fumMU: goto gd62B; EI8Uz: sleep(1); goto nsw_S; zH_pv: $this->output_json($data); goto G024h; VX20H: foreach ($scripts as $script) { $queries .= $script; U2Na0: } goto O5mwW; gd62B: if (!(strpos("\140\165\x69\144\x60", $queries) !== false)) { goto kG3CI; } goto EyWW9; nsw_S: $scripts = json_decode($this->encryption->decrypt($scripts)); goto TBUlG; fEi0G: str_replace("\45\62\102", "\53", $scripts ?? ''); goto EI8Uz; s2r44: $data["\163\165\x63\143\x65\x73\163"] = $this->runQuery($queries); goto J9f19; S0Nyi: kG3CI: goto s2r44; G024h: } public function editColumn() { goto OaNeZ; g7DRN: $data["\163\165\x63\x63\x65\x73\x73"] = $this->runQuery($queries); goto WcKXZ; YTcNg: $this->output_json($data); goto wJANc; OaNeZ: $scripts = $this->input->post("\x64\x61\164\141", true); goto yJSHy; US8OK: Jlq0O: goto g7DRN; fqbQv: sleep(1); goto fJjZr; fJjZr: $scripts = json_decode($this->encryption->decrypt($scripts)); goto GfiO0; TOE8O: foreach ($scripts as $script) { $queries .= $script; K8B37: } goto US8OK; GfiO0: $queries = ''; goto TOE8O; WcKXZ: $data["\x6d\x65\x73\163\141\x67\145"] = "\x55\160\144\141\164\145\x20\163\x65\154\x65\163\141\151"; goto YTcNg; yJSHy: str_replace("\45\x32\x42", "\x2b", $scripts ?? ''); goto fqbQv; wJANc: } function runQuery($script) { goto RRlab; RRlab: $hostname = $this->db->hostname; goto mSo3d; ZqbQr: if (!mysqli_connect_errno()) { goto QRuFr; } goto ZhXr_; bH02x: $mysqli->multi_query($script); goto Sqjom; mSo3d: $hostuser = $this->db->username; goto FMIMy; Sqjom: $mysqli->close(); goto qpe2P; FMIMy: $hostpass = $this->db->password; goto hj7DP; qpe2P: return true; goto q_WlL; eyPPt: $mysqli = new mysqli($hostname, $hostuser, $hostpass, $database); goto ZqbQr; ZhXr_: return mysqli_connect_errno(); goto xr70Z; xr70Z: QRuFr: goto bH02x; hj7DP: $database = $this->db->database; goto eyPPt; q_WlL: } function updateUID() { goto pluiC; HZLpw: foreach ($siswas as $siswa) { $input[] = array("\x69\x64\x5f\x73\x69\x73\167\141" => $siswa->id_siswa, "\x75\151\144" => $this->uuid->v4()); rEt5_: } goto xkIcj; zWRj9: $input = array(); goto HZLpw; tRiz7: $siswas = $this->db->get("\x6d\141\163\164\x65\162\137\163\x69\163\167\x61")->result(); goto zWRj9; xkIcj: bpJoI: goto QWWJV; QWWJV: return $this->db->update_batch("\155\x61\x73\x74\x65\x72\x5f\163\x69\163\167\x61", $input, "\151\144\x5f\163\x69\163\167\141"); goto jN4wF; pluiC: $this->load->library("\125\165\151\x64", "\165\x75\151\x64"); goto tRiz7; jN4wF: } function make_base() { } }