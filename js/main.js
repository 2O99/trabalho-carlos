function generateExperienceInput() {
    var experience = document.getElementById("fieldExperience")
    experience.innerHTML += '<label for="inputExperience">Experiências: </label> <input id="inputExperience" type="text" name="experience[]"> <button type="button" onclick="generateExperienceInput()">Adicionar +</button> <br>'
}

function generateQIInput() {
    var qi = document.getElementById("fieldQI")
    qi.innerHTML += '<label for="inputQI">Referências pessoais: </label> <input id="inputQI" type="text" name="qi[]"> <button type="button" onclick="generateQIInput()">Adicionar +</button> <br>'
}

function displayAge() {
    let age = calcAge();
    document.getElementById("displayAge").innerHTML =  age + " anos.";
    
    document.getElementById("calculatedAge").value = age;
}

function calcAge() {
    let yearInMilliseconds = 31557600000
    let today = new Date()
    let birthDate = new Date(document.getElementById("inputBirthDate").value)

    let age = Math.floor((today - birthDate)  / (yearInMilliseconds))

    return age
}

function printCurriculum(){
    window.print();
}