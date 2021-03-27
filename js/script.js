function addEntry(){
	var entry="<label>Enter Symptoms</label><input type='text' name='symptoms[]' placeholder='Enter symptoms' class='form-control' required='required'/>";
	var element=document.createElement("div");
	element.setAttribute('class', 'col-md-6');
	element.innerHTML=entry;
	document.getElementById('symptom').appendChild(element);
}