<?php 
class LogicalGates {
	public and_gate($a, $b) {
		if ($a and $b) {
			return true;
		} else {
			return false;
		}
	}
	public nand_gate($a, $b) {
		if (!$a and !$b) {
			return true;
		} else {
			return false;
		}
	}
	public or_gate($a, $b) {
		if ($a or $b) {
			return true;
		} else {
			return false;
		}
	}
	public nor_gate($a, $b) {
		if (!$a or !$b) {
			return true;
		} else {
			return false;
		}
	}
	public xor_gate($a, $b) {
		if ($a xor $b) {
			return true;
		} else {
			return false;
		}
	}
	public xnor_gate($a, $b) {
		if (!$a xor !$b) {
			return true;
		} else {
			return false;
		}
	}
	public not_gate($a) {
		if (!$a) {
			return true;
		} else {
			return false;
		}
	}
}
?>
