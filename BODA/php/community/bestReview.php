<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";
?>

<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!-- CSS -->
        <link rel="stylesheet" href="../../html/assets/css/fonts.css" />
        <link rel="stylesheet" href="../../html/assets/css/reset.css" />
        <link rel="stylesheet" href="../../html/assets/css/common.css" />

        <link rel="stylesheet" href="../../html/assets/css/header.css" />
        <link rel="stylesheet" href="../../html/assets/css/login.css">
        <link rel="stylesheet" href="../../html/assets/css/loginPopup.css">
        <link rel="stylesheet" href="../../html/assets/css/mainHeader.css">
        <link rel="stylesheet" href="../../html/assets/css/ReviewView.css">
        <link rel="stylesheet" href="../../html/assets/css/footer.css">
        <!-- //CSS -->
        <title>BEST REVIEW VIEW</title>
    </head>
    <body>
        <?php include "../include/header.php" ?>
        <!-- //header -->

        <main id="main">
            <h2 class="blind">베스트 리뷰 게시판입니다.</h2>
            <div class="main__header top__container">
                <h2>TODAY's</h2>
                <h2>Review</h2>
                <div class="home">
                <span><a href="#">
                    <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 17V11H12V17H17V9H20L10 0L0 9H3V17H8Z" fill="#323232"/>
                    </svg>
                    </a></span><span>BEST REVIEW</span></div>
                <div class="menu">
                    <li><a href="bestReview.php" class="active">BEST REVIEW</a></li>
                    <li><a href="allReview.php">ALL REVIEW</a></li>
                </div>
            </div>

            <section class="cardType">
                <div class="card__container">
                    <div class="card">
                        <figure>
                            <img src="../assets/img/review_card_bg01.jpg" alt="review01" />
                        </figure>
                        <div class="card__desc">
                            <h3><a href="bestReviewView.php">포토존 죽여주는 전시회 다녀왔습니다.</a></h3>
                            <p>토매토</p>
                            <div class="icon">
                                <div>
                                    <svg
                                        width="22"
                                        height="15"
                                        viewBox="0 0 22 15"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C16 15 20.27 11.89 22 7.5C20.27 3.11 16 0 11 0ZM11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 10.26 13.76 12.5 11 12.5ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5Z"
                                            fill="#323232"
                                        />
                                    </svg>
                                    <span>10.4K</span>
                                    <span class="ir">조회수</span>
                                </div>
                                <div>
                                    <svg
                                        width="18"
                                        height="17"
                                        viewBox="0 0 18 17"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M9 16.515L7.695 15.327C3.06 11.124 0 8.352 0 4.95C0 2.178 2.178 0 4.95 0C6.516 0 8.019 0.729 9 1.881C9.981 0.729 11.484 0 13.05 0C15.822 0 18 2.178 18 4.95C18 8.352 14.94 11.124 10.305 15.336L9 16.515Z"
                                            fill="#323232"
                                        />
                                    </svg>
                                    <span>1.5K</span>
                                    <span class="ir">추천수</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <figure>
                            <img src="../assets/img/review_card_bg02.jpg" alt="review02" />
                        </figure>
                        <div class="card__desc">
                            <h3><a href="bestReviewView.html">오랜만에 행복한 주말 보내기</a></h3>
                            <p>동동이</p>
                            <div class="icon">
                                <div>
                                    <svg
                                        width="22"
                                        height="15"
                                        viewBox="0 0 22 15"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C16 15 20.27 11.89 22 7.5C20.27 3.11 16 0 11 0ZM11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 10.26 13.76 12.5 11 12.5ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5Z"
                                            fill="#323232"
                                        />
                                    </svg>
                                    <span>2.4K</span>
                                    <span class="ir">조회수</span>
                                </div>
                                <div>
                                    <svg
                                        width="18"
                                        height="17"
                                        viewBox="0 0 18 17"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M9 16.515L7.695 15.327C3.06 11.124 0 8.352 0 4.95C0 2.178 2.178 0 4.95 0C6.516 0 8.019 0.729 9 1.881C9.981 0.729 11.484 0 13.05 0C15.822 0 18 2.178 18 4.95C18 8.352 14.94 11.124 10.305 15.336L9 16.515Z"
                                            fill="#323232"
                                        />
                                    </svg>
                                    <span>1.2K</span>
                                    <span class="ir">추천수</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <figure>
                            <img src="../assets/img/review_card_bg03.jpg" alt="review03" />
                        </figure>
                        <div class="card__desc">
                            <h3><a href="bestReviewView.html">요즘 유행하는 전시회들 추천!</a></h3>
                            <p>전시 맛집</p>
                            <div class="icon">
                                <div>
                                    <svg
                                        width="22"
                                        height="15"
                                        viewBox="0 0 22 15"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C16 15 20.27 11.89 22 7.5C20.27 3.11 16 0 11 0ZM11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 10.26 13.76 12.5 11 12.5ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5Z"
                                            fill="#323232"
                                        />
                                    </svg>
                                    <span>1.4K</span>
                                    <span class="ir">조회수</span>
                                </div>
                                <div>
                                    <svg
                                        width="18"
                                        height="17"
                                        viewBox="0 0 18 17"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M9 16.515L7.695 15.327C3.06 11.124 0 8.352 0 4.95C0 2.178 2.178 0 4.95 0C6.516 0 8.019 0.729 9 1.881C9.981 0.729 11.484 0 13.05 0C15.822 0 18 2.178 18 4.95C18 8.352 14.94 11.124 10.305 15.336L9 16.515Z"
                                            fill="#323232"
                                        />
                                    </svg>
                                    <span>1.6K</span>
                                    <span class="ir">추천수</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="cardType mobile">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card">
                                <figure>
                                    <img src="../assets/img/review_card_bg01.jpg" alt="review01" />
                                </figure>
                                <div class="card__desc">
                                    <h3><a href="bestReviewView.html">포토존 죽여주는 전시회 다녀왔습니다.</a></h3>
                                    <p>토매토</p>
                                    <div class="icon">
                                        <div>
                                            <svg
                                                width="22"
                                                height="15"
                                                viewBox="0 0 22 15"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C16 15 20.27 11.89 22 7.5C20.27 3.11 16 0 11 0ZM11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 10.26 13.76 12.5 11 12.5ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5Z"
                                                    fill="#323232"
                                                />
                                            </svg>
                                            <span>10.4K</span>
                                            <span class="ir">조회수</span>
                                        </div>
                                        <div>
                                            <svg
                                                width="18"
                                                height="17"
                                                viewBox="0 0 18 17"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M9 16.515L7.695 15.327C3.06 11.124 0 8.352 0 4.95C0 2.178 2.178 0 4.95 0C6.516 0 8.019 0.729 9 1.881C9.981 0.729 11.484 0 13.05 0C15.822 0 18 2.178 18 4.95C18 8.352 14.94 11.124 10.305 15.336L9 16.515Z"
                                                    fill="#323232"
                                                />
                                            </svg>
                                            <span>1.5K</span>
                                            <span class="ir">추천수</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <figure>
                                    <img src="../assets/img/review_card_bg02.jpg" alt="review02" />
                                </figure>
                                <div class="card__desc">
                                    <h3><a href="bestReviewView.html">오랜만에 행복한 주말 보내기</a></h3>
                                    <p>동동이</p>
                                    <div class="icon">
                                        <div>
                                            <svg
                                                width="22"
                                                height="15"
                                                viewBox="0 0 22 15"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C16 15 20.27 11.89 22 7.5C20.27 3.11 16 0 11 0ZM11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 10.26 13.76 12.5 11 12.5ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5Z"
                                                    fill="#323232"
                                                />
                                            </svg>
                                            <span>2.4K</span>
                                            <span class="ir">조회수</span>
                                        </div>
                                        <div>
                                            <svg
                                                width="18"
                                                height="17"
                                                viewBox="0 0 18 17"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M9 16.515L7.695 15.327C3.06 11.124 0 8.352 0 4.95C0 2.178 2.178 0 4.95 0C6.516 0 8.019 0.729 9 1.881C9.981 0.729 11.484 0 13.05 0C15.822 0 18 2.178 18 4.95C18 8.352 14.94 11.124 10.305 15.336L9 16.515Z"
                                                    fill="#323232"
                                                />
                                            </svg>
                                            <span>1.2K</span>
                                            <span class="ir">추천수</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <figure>
                                    <img src="../assets/img/review_card_bg03.jpg" alt="review03" />
                                </figure>
                                <div class="card__desc">
                                    <h3><a href="bestReviewView.html">요즘 유행하는 전시회들 추천!</a></h3>
                                    <p>전시 맛집</p>
                                    <div class="icon">
                                        <div>
                                            <svg
                                                width="22"
                                                height="15"
                                                viewBox="0 0 22 15"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C16 15 20.27 11.89 22 7.5C20.27 3.11 16 0 11 0ZM11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 10.26 13.76 12.5 11 12.5ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5Z"
                                                    fill="#323232"
                                                />
                                            </svg>
                                            <span>1.4K</span>
                                            <span class="ir">조회수</span>
                                        </div>
                                        <div>
                                            <svg
                                                width="18"
                                                height="17"
                                                viewBox="0 0 18 17"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M9 16.515L7.695 15.327C3.06 11.124 0 8.352 0 4.95C0 2.178 2.178 0 4.95 0C6.516 0 8.019 0.729 9 1.881C9.981 0.729 11.484 0 13.05 0C15.822 0 18 2.178 18 4.95C18 8.352 14.94 11.124 10.305 15.336L9 16.515Z"
                                                    fill="#323232"
                                                />
                                            </svg>
                                            <span>1.6K</span>
                                            <span class="ir">추천수</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button">
                        <div class="swiper-button-play"><span class="ir">play</span></div>
                        <div class="swiper-button-stop"><span class="ir">stop</span></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </section>
            <!-- //cardType -->

            <section class="mid__container">
                <div class="board">
                    <div class="review__table">
                        <table>
                            <colgroup>
                                <col style="width: 10%" />
                                <col style="width: 32%" />
                                <col style="width: 12%" />
                                <col style="width: 12%" />
                                <col style="width: 12%" />
                                <col style="width: 12%" />
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>번호</th>
                                    <th>제목</th>
                                    <th>작성자</th>
                                    <th>날짜</th>
                                    <th>추천수</th>
                                    <th>조회수</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>10</td>
                                    <td><a href="bestReviewView.html">진짜 멋진 포토존 어쩌고</a></td>
                                    <td>둘리</td>
                                    <td>2022-10-05</td>
                                    <td>123</td>
                                    <td>1.1K</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td><a href="bestReviewView.html">진짜 멋진 포토존 어쩌고</a></td>
                                    <td>둘리</td>
                                    <td>2022-10-05</td>
                                    <td>123</td>
                                    <td>1.1K</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td><a href="bestReviewView.html">진짜 멋진 포토존 어쩌고</a></td>
                                    <td>둘리</td>
                                    <td>2022-10-05</td>
                                    <td>123</td>
                                    <td>1.1K</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td><a href="bestReviewView.html">진짜 멋진 포토존 어쩌고</a></td>
                                    <td>둘리</td>
                                    <td>2022-10-05</td>
                                    <td>123</td>
                                    <td>1.1K</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td><a href="bestReviewView.html">진짜 멋진 포토존 어쩌고</a></td>
                                    <td>둘리</td>
                                    <td>2022-10-05</td>
                                    <td>123</td>
                                    <td>1.1K</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td><a href="bestReviewView.html">진짜 멋진 포토존 어쩌고</a></td>
                                    <td>둘리</td>
                                    <td>2022-10-05</td>
                                    <td>123</td>
                                    <td>1.1K</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td><a href="bestReviewView.html">진짜 멋진 포토존 어쩌고</a></td>
                                    <td>둘리</td>
                                    <td>2022-10-05</td>
                                    <td>123</td>
                                    <td>1.1K</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><a href="bestReviewView.html">진짜 멋진 포토존 어쩌고</a></td>
                                    <td>둘리</td>
                                    <td>2022-10-05</td>
                                    <td>123</td>
                                    <td>1.1K</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><a href="bestReviewView.html">진짜 멋진 포토존 어쩌고</a></td>
                                    <td>둘리</td>
                                    <td>2022-10-05</td>
                                    <td>123</td>
                                    <td>1.1K</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td><a href="bestReviewView.html">진짜 멋진 포토존 어쩌고</a></td>
                                    <td>둘리</td>
                                    <td>2022-10-05</td>
                                    <td>123</td>
                                    <td>1.1K</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="review__table subTable">
                        <table>
                            <colgroup>
                                <col style="width: 12%" />
                                <col style="width: 30%" />
                                <col style="width: 12%" />
                                <col style="width: 20%" />
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>번호</th>
                                    <th>제목</th>
                                    <th>작성자</th>
                                    <th>추천 / 조회</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>10</td>
                                    <td><a href="allreviewView.html">진짜 멋진 포토존 이 시대 최고의 전시</a></td>
                                    <td>둘리</td>
                                    <td>2.4K / 1.1K</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td><a href="allreviewView.html">진짜 멋진 포토존 어쩌고 저쩌고 울랄라랄라라</a></td>
                                    <td>둘리</td>
                                    <td>123 / 1.1K</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td><a href="allreviewView.html">진짜 멋진 포토존 어쩌고</a></td>
                                    <td>둘리</td>
                                    <td>123 / 1.1K</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td><a href="allreviewView.html">진짜 멋진 포토존 어쩌고</a></td>
                                    <td>둘리</td>
                                    <td>123 / 1.1K</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td><a href="allreviewView.html">진짜 멋진 포토존 어쩌고</a></td>
                                    <td>둘리</td>
                                    <td>123 / 1.1K</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td><a href="allreviewView.html">진짜 멋진 포토존 어쩌고</a></td>
                                    <td>둘리</td>
                                    <td>123 / 1.1K</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td><a href="allreviewView.html">진짜 멋진 포토존 어쩌고</a></td>
                                    <td>둘리</td>
                                    <td>123 / 1.1K</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><a href="allreviewView.html">진짜 멋진 포토존 어쩌고</a></td>
                                    <td>둘리</td>
                                    <td>123 / 1.1K</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><a href="allreviewView.html">진짜 멋진 포토존 어쩌고</a></td>
                                    <td>둘리</td>
                                    <td>123 / 1.1K</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td><a href="allreviewView.html">진짜 멋진 포토존 어쩌고</a></td>
                                    <td>둘리</td>
                                    <td>123 / 1.1K</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="board__btn">
                            <a href="ReviewWrite.html">
                                글쓰기
                            </a>
                        </div>
                    </div>

                </div>
                <div class="riview__search">
                    <fieldset>
                        <legend class="blind">게시글 검색</legend>
                        <select name="searchOption" id="searchOption">
                            <option value="title">제목</option>
                            <option value="content">내용</option>
                            <option value="name">등록자</option>
                        </select>
                        <input
                            type="search"
                            name="searchKeyword"
                            id="searchKeyword"
                            placeholder="검색어를 입력하세요."
                            aria-label="search"
                            required
                        />
                        <button type="submit" class="searchBtn">
                            <svg
                                width="18"
                                height="18"
                                viewBox="0 0 29 29"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M20.7261 18.239H19.4162L18.952 17.7913C20.5769 15.9011 21.5552 13.4471 21.5552 10.7776C21.5552 4.82504 16.7301 0 10.7776 0C4.82504 0 0 4.82504 0 10.7776C0 16.7301 4.82504 21.5552 10.7776 21.5552C13.4471 21.5552 15.9011 20.5769 17.7913 18.952L18.239 19.4162V20.7261L25.391 27.8638C25.7937 28.2658 25.9951 28.4667 26.2279 28.5402C26.424 28.602 26.6345 28.6019 26.8306 28.5399C27.0633 28.4662 27.2644 28.265 27.6667 27.8627L27.8627 27.6667C28.265 27.2644 28.4662 27.0633 28.5399 26.8306C28.6019 26.6345 28.602 26.424 28.5402 26.2279C28.4667 25.9951 28.2658 25.7937 27.8638 25.391L20.7261 18.239ZM10.7776 18.239C6.64894 18.239 3.31618 14.9062 3.31618 10.7776C3.31618 6.64894 6.64894 3.31618 10.7776 3.31618C14.9062 3.31618 18.239 6.64894 18.239 10.7776C18.239 14.9062 14.9062 18.239 10.7776 18.239Z"
                                    fill="#323232"
                                />
                            </svg>
                        </button>
                    </fieldset>
                </div>

                <div class="board__pages">
                    <ul>
                        <li><a href="#">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.2498 18L11.2498 12L17.2498 6" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M11.25 18L5.25 12L11.25 6" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg></a></li>
                        <li><a href="#">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.25 6L8.25 12L14.25 18" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                </a></li>
                        <li><a class="active" href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 18L15 12L9 6" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg></a></li>
                        <li><a href="#">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.75024 6L12.7502 12L6.75024 18" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12.75 6L18.75 12L12.75 18" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg></a></li>
                    </ul>
                </div>
            </section>
        </main>

        <?php include "../include/footer.php" ?>

        <script src="../../html/assets/js/headermenu.js"></script>
        <script src="../../html/assets/js/loginpopup.js"></script>
    </body>
</html>
