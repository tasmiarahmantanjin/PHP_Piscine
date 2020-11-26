// Initialize the Prompt
function newPrompt()
{
	let addTask = prompt("Add new task in TO-DO List:");
	// if (addTask === "")
		// return;
	newEntry(addTask);
}

// Add a new Task in TO-DO
function newEntry(addTask)
{
	let newDiv = document.createElement("div");		// create new elments
	let newTask = document.createTextNode(addTask);	// create text nodes for new elements
	newDiv.appendChild(newTask);					// attach newTask nodes to new elements
//	The prepend() method inserts a set of Node objects 
//or DOMString objects after the first child of a parent node:
	ft_list.prepend(newDiv);
	newDiv.setAttribute("onclick", "deleteEntry(this)");
}

// Delete a task from TO-DO
function deleteEntry(element)
{
	if (confirm('Are you sure you want to delete this Task?'))
	{
		let del = document.getElementById('ft_list');
		del.removeChild(element);
	}
}

/* ================================================================= */
// SET COOOKIE //

