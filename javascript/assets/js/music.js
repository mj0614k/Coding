const allMusic = [
    {
        name: "10°0' 0° N 118°50 0° E",
        artist: "김승민",
        img: "effect_img01",
        audio: "music_audio01",
    },
    {
        name: "After Like",
        artist: "IVE",
        img: "effect_img02",
        audio: "music_audio02",
    },
    {
        name: "사랑한다고 말해줘",
        artist: "탑현",
        img: "effect_img03",
        audio: "music_audio03",
    },
    {
        name: "내 기쁨은 너가 벤틀리를 끄는 거야",
        artist: "김승민",
        img: "effect_img04",
        audio: "music_audio04",
    },
    {
        name: "이불킥",
        artist: "4MEN",
        img: "effect_img05",
        audio: "music_audio05",
    },
    {
        name: "All I Wanna Do",
        artist: "박재범",
        img: "effect_img06",
        audio: "music_audio06",
    },
    {
        name: "You Give Me Something",
        artist: "James Morrison",
        img: "effect_img07",
        audio: "music_audio07",
    },
    {
        name: "당신만이",
        artist: "곽진언, 김필, 임도혁",
        img: "effect_img08",
        audio: "music_audio08",
    },
    {
        name: "GONE(Feat. Paloalto)",
        artist: "Leellamarz, TOIL",
        img: "effect_img09",
        audio: "music_audio09",
    },
    {
        name: "회복이 급해(Feat. 하림, 호투)",
        artist: "2BIC",
        img: "effect_img10",
        audio: "music_audio10",
    },
];

const musicWrap = document.querySelector(".music__wrap");
const musicView = document.querySelector(".music__view .img img");
const musicName = document.querySelector(".music__view .title h3");
const MusicArtist = document.querySelector(".music__view .title p");
const musicAudio = document.querySelector("#main-audio");

const musicPlay = document.querySelector("#control-play");
const musicPrevBtn = document.querySelector("#control-prev");
const musicNextBtn = document.querySelector("#control-next");

let musicIndex = 1;

// 음악 재생
function loadMusic(num) {
    musicName.innerText = allMusic[num - 1].name;
    MusicArtist.innerText = allMusic[num - 1].artist;
    musicView.src = `../assets/img/${allMusic[num - 1].img}.png`;
    musicView.alt = allMusic[num - 1].name;
    musicAudio.src = `../assets/audio/${allMusic[num - 1].audio}.mp3`;
}

// 재생 버튼
function playMusic() {
    musicWrap.classList.add("paused");
    musicPlay.setAttribute("id", "control-stop");
    musicPlay.setAttribute("class", "stop");
    musicAudio.play();
}

// 정지 버튼
function pauseMusic() {
    musicWrap.classList.remove("paused");
    musicPlay.setAttribute("id", "control-play");
    musicPlay.setAttribute("class", "play");
    musicAudio.pause();
}

// 이전 곡 버튼
function prevMusic() {}

// 다음 곡 버튼
function nextMusic() {}

window.addEventListener("load", () => {
    loadMusic(musicIndex);
});

// 플레이 버튼
musicPlay.addEventListener("click", () => {
    const isMusicPaused = musicWrap.classList.contains("paused"); // 음악이 재생 중
    isMusicPaused ? pauseMusic() : playMusic();
});
