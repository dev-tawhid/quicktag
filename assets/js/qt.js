QTags.addButton('qtd-button-one', 'U', '<u>','</u>'  );
QTags.addButton('qtd-button-two', 'Add Name', qtd_button_two);
QTags.addButton('qtd-button-three', 'FA', qtd_preview);


function qtd_button_two(){
    var name = prompt('Whats you name?');
    var text = "Hello "+name;
    QTags.insertContent(text);
}

function qtd_preview(){
    tb_show("Fontawesome", data.preview);
}

function insertFA(icon){
    QTags.insertContent("<i class=' fa " + icon + "'></i>");
}
