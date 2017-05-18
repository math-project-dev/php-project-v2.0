
/*
	code of all onclick functions
*/

// 		show answer block
// 		@param 	id 		Cycle count
//		@param	state	Current show state (on [1]/off [other])

function showAnswer(id, state)
{
	if (state == 1)
	// state when we need to show 
	{
		document.getElementById('_answer-'+ id +'').style.display=''; 
		document.getElementById('_show-1-'+ id +'').style.display='none'; 
		document.getElementById('_show-2-'+ id +'').style.display='';
		document.getElementById('_answerBox-'+ id +'').style.display='';
	} 
		else 
	// state when we need to close
	{
		document.getElementById('_answer-'+ id +'').style.display='none'; 
		document.getElementById('_show-1-'+ id +'').style.display=''; 
		document.getElementById('_show-2-'+ id +'').style.display='none';
		document.getElementById('_answerBox-'+ id +'').style.display='none';
	}
}


// 		check correct answer
// 		@param 	name 	Name of current element
//		@param	correct	Correct answer

function checkAnswer(name, correct)
{
	var _userans = document.getElementById(name).value;
	
	if ( _userans != "")
	// check for null state
	{
		if (_userans === correct)
		// check for strong-correct statement
		{
			text = "Ответ верный";
			document.getElementById('result-'+ name).style.color="green";
		} else {
			text = "Ответ неверный";
			document.getElementById('result-'+ name).style.color="red";
		}
		
	} else {
		text = "Введите ответ";
		document.getElementById('result-'+ name).style.color="orange";
	}
	// show the result
	document.getElementById('result-'+ name).innerHTML = text;
}