let App = {
	config : {
		"nickname" : null,
		"task" : []
	},
	setTask : function(taskID){
		let now  = Math.floor(Date.now() / 1000);
		this.task[taskID].done_on = now;
		
	},
	sksjdfj;
	start : function(){
		// Console.log('Starting Application');

		// Adding nickname to html
		let n = document.getElementById("nickname");
			n.innerHTML = this.config.nickname;

		let i = 0;
		while (this.config.task[i]){
			
			let t = this.config.task[i];
			let status = t.done_on != null ? ( t.done_on <= t.deadline ? "done" : "late" ) : "todo";

			let htmlElem = document.createElement('li'); // Create a <li>
			htmlElem.className = "list-item";
			htmlElem.ID = t.ID;
			htmlElem.deadline = t.deadline;
			let textHtmlElem = document.createTextNode(t.title); // Create a text
			htmlElem.appendChild(textHtmlElem); // Append the text to the node <li>
			document.getElementById(status).appendChild(htmlElem); // Append the node <li> to element #todo
			
			i++;
		}
	}
};

App.config.nickname = 'John';
App.config.task = [
	{
		"title" 		: "Faire A manger",
		"created_on" 	: 1510180290,
		"deadline"		: 1510180457,
		"done_on"		: null
	},
	{
		"title" 		: "Regarder la tv",
		"created_on" 	: 1510156092,
		"deadline"		: 1510156192,
		"done_on"		: null
	}
];
App.start();