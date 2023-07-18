function updateCardData(endpoint, cardTitleId, cardTextId, cardTextSmallId, cardTextStatusId, cardImageId) {
    axios.get(endpoint)
        .then(function (response) {
            const data = response.data;
           
            updateData(cardTitleId, cardTextId, cardTextSmallId, cardTextStatusId, cardImageId, data);
            setTimeout(function() {
                updateCardData(endpoint, cardTitleId, cardTextId, cardTextSmallId, cardTextStatusId, cardImageId);
            }, 2000);
        })
        .catch(function (error) {
      
            setTimeout(function() {
                updateCardData(endpoint, cardTitleId, cardTextId, cardTextSmallId, cardTextStatusId, cardImageId);
            }, 2000);
        });
}

function updateData(cardTitleId, cardTextId, cardTextSmallId, cardTextStatusId, cardImageId, data) {
    const cardTitleElement = document.getElementById(cardTitleId);
    const cardTextElement = document.getElementById(cardTextId);
    const cardText1Small = document.getElementById(cardTextSmallId);
    const cardTextTStatus = document.getElementById(cardTextStatusId);
    const levelGas = data.status;
    cardTitleElement.innerText = data.database;
    cardTextElement.innerText = data.device_id;
    cardText1Small.innerText = "";
    const cardImageElement = document.getElementById(cardImageId);
    cardTextTStatus.innerText = data.status;

    if (levelGas == "Tidak Ada Gas Bocor") {
        cardText1Small.innerText = "Tingkat ini menujukan bahwa tidak ada kebocoran gas yang berarti aman digunakan dan siap digunakan";
        cardImageElement.src = "https://media.discordapp.net/attachments/1122395728224976997/1122395874811727934/house-icon.png";
    } else if (levelGas == "LEVEL 1") {
        cardText1Small.innerText = "Perhatikan adanya kebocoran gas untuk mencegah peningkatan risiko yang lebih tinggi";
        cardImageElement.src = "https://media.discordapp.net/attachments/1122395728224976997/1122395875101118494/low_1.png";
    } else if (levelGas == "LEVEL 2") {
        cardText1Small.innerText = "Segera perbaiki sumber kebocoran gas untuk menghindari dampak kesehatan yang serius";
        cardImageElement.src = "https://media.discordapp.net/attachments/1122395728224976997/1122395875407298600/Moderate_1.png";
    } else if (levelGas == "LEVEL 3") {
        cardText1Small.innerText = "Bahaya serius! Segera ambil tindakan untuk memadamkan kebocoran gas dan melindungi diri Anda";
        cardImageElement.src = "https://media.discordapp.net/attachments/1122395728224976997/1122395875973533756/High_1.png";
    } else if (levelGas == "LEVEL 4") {
        cardText1Small.innerText = "Kondisi darurat! Evakuasi segera dan panggil petugas pemadam kebakaran untuk mengatasi kebocoran gas yang sangat berbahaya";
        cardImageElement.src = "https://media.discordapp.net/attachments/1122395728224976997/1122395875667365908/critical_1.png";
    }else {
        cardText1Small.innerText = "Menunggu";
        cardImageElement.src = "https://media.discordapp.net/attachments/1122395728224976997/1122395874811727934/house-icon.png";
    }
}

// Call the updateCardData function for each device
updateCardData('/divace1', 'card-title-divace-1', 'card-text-divace-1', 'card-text-1-small', 'status-level-divace-1', 'image-divace1');
updateCardData('/divace3', 'card-title-divace-third', 'card-text-divace-third', 'card-text-third-small', 'status-level-divace-third', 'image-divace3');
updateCardData('/divace2', 'card-title-divace-sacond', 'card-text-divace-sacond', 'card-text-sacond-small', 'status-level-divace-sacond', 'image-divace2');
