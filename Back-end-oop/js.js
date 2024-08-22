

 function addEtudiant()
    {
            
        let listEtuidant = document.getElementById("listEtuidant");
        let inputNom = document.getElementById("nom").value;
        let inputPrenom = document.getElementById("prenom").value;
        let inputAge = document.getElementById("age").value;

        let li = document.createElement("li");

        let spane = document.createElement("span");
        spane.class = "span";
        spane.innerText = inputNom +" "+ inputPrenom +" "+ inputAge ;

        li.appendChild(spane);

        let buttonsupprimer  = document.createElement("button");
        buttonsupprimer.type = "button";
        buttonsupprimer.innerText = "deleteEtudiant";
        buttonsupprimer.onclick = function ()
        {
            suprimerEtudian(this);
        };
        li.appendChild(buttonsupprimer);
        listEtuidant.appendChild(li);
     
    }


    function suprimerEtudian(item)
    {
        item.parentElement.remove();
    }
    
    function validateInput()
    {

        let 


    }
    

    
