function addEntrywoc(){
	var entry="<label>Causes of Disease</label><input type='text' name='woc[]' placeholder='Enter Causes of Disease' class='form-control' required='required'/>";
	var element=document.createElement("div");
	element.setAttribute('class', 'col-md-6');
	element.innerHTML=entry;
	document.getElementById('woc').appendChild(element);
}