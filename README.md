# php-project-v2.0
A math assistant written in PHP, version 2.0. Here all the information about the project modules is documented, as well as the scripts used in the project. This is a simple tutorial how to use our project:

All Javascript's onclick functions located **master/assets/js/onclick_funcs.js**. That is a simple preview of any our functions: 

```javascript
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
```
We are trying to document all of our code so that other users can safely use the code for their own purposes. All of this functions have a header of their arguments and simple description:

```javascript
// 		check correct answer
// 		@param 	name 	Name of current element
//		@param	correct	Correct answer
```
Our project uses some frameworks and other plug-ins: 
 * MathJAX
 * Bootstrap

All of PHP code has their header too with some words about that function or block of code. We welcome any help in the development of the school project and help in the implementation of functions and ideas! :v:
