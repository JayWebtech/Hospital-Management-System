function addEntrydb(){
	var entry="<label>Treatment</label><input type='text' name='db[]' placeholder='Enter Treatment' class='form-control' required='required'/>";
	var element=document.createElement("div");
	element.setAttribute('class', 'col-md-6');
	element.innerHTML=entry;
	document.getElementById('dp').appendChild(element);
}