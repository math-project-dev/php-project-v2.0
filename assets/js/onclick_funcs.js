
/*
	code of all onclick functions
*/

// 		show answer block
// 		@param 	id 		Cycle count
//		@param	state	Current show state (on [1]/off [other])
function showAnswer(id, state)
{
	if (state == 1)
	{
		document.getElementById('_answer-'+ id +'').style.display=''; 
		document.getElementById('_show-1-'+ id +'').style.display='none'; 
		document.getElementById('_show-2-'+ id +'').style.display='';
		document.getElementById('_answerBox-'+ id +'').style.display='';
	} 
		else 
	{
		document.getElementById('_answer-'+ id +'').style.display='none'; 
		document.getElementById('_show-1-'+ id +'').style.display=''; 
		document.getElementById('_show-2-'+ id +'').style.display='none';
		document.getElementById('_answerBox-'+ id +'').style.display='none';
	}
}