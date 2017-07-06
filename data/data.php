<?php 
	$type = $_REQUEST['type'];
	$page = $_REQUEST['pageNo'];
	$count = $_REQUEST['num'];
	$str = '';
	if ($type == 'list') {
		if ($page == 1) {
			$str = '{ "records":[ 
						{"Name":"张三","City":"德州","Country":"中国","age":20}, 
						{"Name":"李四","City":"济南","Country":"中国","age":25}, 
						{"Name":"圣保罗","City":"休斯顿","Country":"美国","age":40}, 
						{"Name":"安倍","City":"日本","Country":"中国","age":23}, 
						{"Name":"特朗普","City":"华盛顿","Country":"美国","age":42}, 
						{"Name":"刘德华","City":"香港","Country":"中国","age":36}, 
						{"Name":"查理","City":"越南","Country":"越南","age":18}, 
						{"Name":"小花","City":"禹城","Country":"中国","age":2}, 
						{"Name":"普京","City":"莫斯科","Country":"俄罗斯","age":57}, 
						{"Name":"金三胖","City":"平壤","Country":"朝鲜","age":28}
						] 
					}';
		}else if ($page == 2) {
			$str = '{ "records":[ 
						{"Name":"土鳖三世","City":"伦敦","Country":"英国","age":41},
						{"Name":"土鳖四世","City":"伦敦","Country":"英国","age":41},
						{"Name":"土鳖六世","City":"伦敦","Country":"英国","age":41},
						{"Name":"土鳖七世","City":"伦敦","Country":"英国","age":41},
						{"Name":"土鳖一世","City":"伦敦","Country":"英国","age":41},
						{"Name":"土鳖二世","City":"伦敦","Country":"英国","age":41},
						{"Name":"土鳖五世","City":"伦敦","Country":"英国","age":41},
						{"Name":"土鳖八世","City":"伦敦","Country":"英国","age":41},
						{"Name":"土鳖十世","City":"伦敦","Country":"英国","age":41},
						{"Name":"土鳖九世","City":"伦敦","Country":"英国","age":41}
						] 
					}';
		}else if($page == 3){
			$str = '{ "records":[ 
						{"Name":"女皇1","City":"伦敦","Country":"英国","age":41},
						{"Name":"女皇2","City":"伦敦","Country":"英国","age":41},
						{"Name":"女皇3","City":"伦敦","Country":"英国","age":41},
						{"Name":"女皇4","City":"伦敦","Country":"英国","age":41},
						{"Name":"女皇5","City":"伦敦","Country":"英国","age":41},
						{"Name":"女皇6","City":"伦敦","Country":"英国","age":41},
						{"Name":"女皇7","City":"伦敦","Country":"英国","age":41},
						{"Name":"女皇8","City":"伦敦","Country":"英国","age":41},
						{"Name":"女皇9","City":"伦敦","Country":"英国","age":41},
						{"Name":"女皇0","City":"伦敦","Country":"英国","age":41}
						] 
					}';
		}else if ($page == 4) {
			$str = '{ "records":[ 
						{"Name":"美猴王1","City":"花果山","Country":"中国","age":41},
						{"Name":"美猴王2","City":"花果山","Country":"中国","age":41},
						{"Name":"美猴王3","City":"花果山","Country":"中国","age":41},
						{"Name":"美猴王4","City":"花果山","Country":"中国","age":41},
						{"Name":"美猴王5","City":"花果山","Country":"中国","age":41},
						{"Name":"美猴王5","City":"花果山","Country":"中国","age":41},
						{"Name":"美猴王7","City":"花果山","Country":"中国","age":41},
						{"Name":"美猴王8","City":"花果山","Country":"中国","age":41},
						{"Name":"美猴王9","City":"花果山","Country":"中国","age":41},
						{"Name":"美猴王0","City":"花果山","Country":"中国","age":41}
						] 
					}';
		}else{
			$str = '{ "records":[] }';
		}
		
	}
	echo $str;
 ?>