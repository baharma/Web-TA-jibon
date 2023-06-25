function updateCardData() {

    axios.get('/divace3')
        .then(function (response) {
            const data = response.data;
            console.log(data)
            updateDataDivace3(data)
            setTimeout(updateCardData, 2000);
        })
        .catch(function (error) {
            console.log(error);

            setTimeout(updateCardData, 2000);
        });
}


updateCardData();


function updateDataDivace3(data) {
    const cardTitleElement = document.getElementById('card-title-divace-third');
    const cardTextElement = document.getElementById('card-text-divace-third');
    const cardText1Small = document.getElementById('card-text-third-small');
    const cardTextTStatus = document.getElementById('status-level-divace-third');
    const levelGas = data.status;
    cardTitleElement.innerText = data.database;
    cardTextElement.innerText = data.device_id;
    cardText1Small.innerText = "";
    const cardImageElement = document.getElementById('image-divace3');
    cardTextTStatus.innerText = data.status;

    if (levelGas == "Tidak Ada Gas Bocor") {
        cardText1Small.innerText = "tingkat ini menujukan bahwa tidak ada kebocoran gas yang berarti aman digunakan dan siap digunakan";
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
    } else {
        cardText1Small.innerText = "Kondisi darurat! Evakuasi segera dan panggil petugas pemadam kebakaran untuk mengatasi kebocoran gas yang sangat berbahaya";
        cardImageElement.src = "https://media.discordapp.net/attachments/1122395728224976997/1122395875667365908/critical_1.png";
    }
}




