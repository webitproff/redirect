<?php

/* ====================
  [BEGIN_COT_EXT]
  Hooks=index.first
  Order=1
  [END_COT_EXT]
  ==================== */



if (Cot::$cfg['plugin']['redirect']['redirectuser'] == 0 && $cfg['plugin']['redirect']['redirect'] == 1) 
	{
	cot_redirect(cot_url($cfg['plugin']['redirect']['redirecturl']));
	}
	elseif (Cot::$cfg['plugin']['redirect']['redirectuser'] == 1 && Cot::$usr['id'] == 0)
	{
	cot_redirect(cot_url($cfg['plugin']['redirect']['redirecturl']));
	}


