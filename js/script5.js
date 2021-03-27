function addEntrypre(){
	var entry="<label>Prevention</label><input type='text' name='pre[]' placeholder='Enter Prevention' class='form-control' required='required'/>";
	var element=document.createElement("div");
	element.setAttribute('class', 'col-md-6');
	element.innerHTML=entry;
	document.getElementById('pre').appendChild(element);
}