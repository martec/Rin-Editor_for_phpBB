	insert_text = function(cod, spaces) {
		if (spaces) {
			cod = ' ' + cod + ' ';
		}	
		opener.MyBBEditor.insertText(cod);
	}