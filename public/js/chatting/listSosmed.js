document.addEventListener("DOMContentLoaded", function() {
    const addButton = document.getElementById("addButton");
    const inputContainer = document.getElementById("inputContainer");
    let inputIndex = 0;

    addButton.addEventListener("click", function() {
        inputIndex++;

        const inputGroup = document.createElement("div");
        inputGroup.className = "input-group mb-3";

        const input = document.createElement("input");
        input.type = "text";
        input.className = "form-control";
        input.placeholder = "Input here";
        input.name = 'nameSosmed';

        const select = document.createElement("select");
        select.name = 'pickSosmed'
        select.className = "form-control";
        const option1 = document.createElement("option");
        option1.value = "WhatsApp";
        option1.text = "WhatsApp";
        const option2 = document.createElement("option");
        option2.value = "Instagram";
        option2.text = "Instagram";
        const option3 = document.createElement("option");
        option3.value = "Github";
        option3.text = "Github";
        const option4 = document.createElement("option");
        option4.value = "Twitter";
        option4.text = "Twitter";
        const option5 = document.createElement("option");
        option5.value = "Telegram";
        option5.text = "Telegram";
        const option6 = document.createElement("option");
        option6.value = "Discord";
        option6.text = "Discord";
        const option7 = document.createElement("option");
        option7.value = "Tiktok";
        option7.text = "Tiktok";
        const option8 = document.createElement("option");
        option8.value = "Other";
        option8.text = "Other";
        select.appendChild(option1);
        select.appendChild(option2);
        select.appendChild(option3);
        select.appendChild(option4);
        select.appendChild(option5);
        select.appendChild(option6);
        select.appendChild(option7);
        select.appendChild(option8);

        const deleteButton = document.createElement("button");
        deleteButton.textContent = "Delete";
        deleteButton.className = "btn btn-danger ml-2";
        deleteButton.addEventListener("click", function() {
            inputContainer.removeChild(inputGroup);
        });

        inputGroup.appendChild(input);
        inputGroup.appendChild(select);
        inputGroup.appendChild(deleteButton);
        inputContainer.appendChild(inputGroup);
    });
});
