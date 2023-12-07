 import tatiyeNet,{
  index,
  setSplit,
  fetchExternal,
  jsonCode,
  useHandel,
  setDateTime,
  readmore,
  getToken,
  setToken,
  romawi,
  substr,
  replace,
  rupiah,
  terbilang,
  explode
}  from "{tatiye}"; 
window.onload = function() {
 window.editor = CodeMirror.fromTextArea(document.getElementById("editorCode"), {
     lineNumbers: true,
     mode: 'javascript',
     json: true,
     theme: 'material-palenight'
  });

 window.editor2 = CodeMirror.fromTextArea(document.getElementById("editorCode2"), {
     lineNumbers: true,
     mode: 'javascript',
     json: true,
     theme: 'material-palenight'
  });
// first code
let initValue = Storage.val ? Storage.val : "let ready = 'Ngorei {version}'\nready";
editor.setValue(initValue);

/**
 * @param array  options the display options .
 * @param mixed  Block to generate a customized inside  content.
 */
// let initValue2 = Storage2.val ? Storage2.val : "";
// editor2.setValue(initValue2);
};  

const Storage = {
  get val() {
    this.data = window.localStorage.getItem("savedRun");
    return this.data;
  },
  set val(value) {
    this.data = value;
    window.localStorage.setItem("savedRun", this.data);
  } 
};
const Storage2 = {
  get val() {
    this.data = window.localStorage.getItem("saveImport1");
    return this.data;
  },
  set val(value) {
    this.data = value;
    window.localStorage.setItem("saveImport1", this.data);
  } 
};

const handleSend = async () => {
    var message=editor.getValue();
    var message2=editor2.getValue();
      let getmodule3=setSplit(1,'=',message)
      let getmodule4=setSplit(0,'(',getmodule3)
   
    console.log(message2)
   
    if (getmodule4=='setToken') {
      var variabel='setToken,getToken'

    } else if (getmodule4=='terminal/consul') {
      var variabel='index';
    } else if (getmodule4=='index') {
      var variabel='index';
    } else {
      var variabel=getmodule4;
    }

    var modulesImpot='import tatiyeNet,{'+variabel+'} from "{tatiye]"';
    Storage.val=message;
    let resultsreplace=replace(modulesImpot,']','}')
    Storage2.val=resultsreplace;
    editor2.setValue(resultsreplace);

    var  command = message.replace(/[\u2018\u2019]/g, "'").replace(/[\u201c\u201d]/g, '"');
    var result;
    var evalError = false;
    result =eval(command);
    $("#js-console").prepend('<div>'+result+'</div>');
}
const handleClear = async () => {
 $("#js-console").html('');
}
const clearRequestBtn = document.querySelector('#clearRequestBtn');
const sendRequestBtn = document.querySelector('#sendRequest');
clearRequestBtn.addEventListener('click', handleClear);
sendRequestBtn.addEventListener('click', handleSend);