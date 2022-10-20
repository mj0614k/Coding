<?php 
    include "../connect/connect.php";
    include "../connect/session.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOTICE</title>
    <!-- CSS -->
    <?php include "../include/linknotice.php" ?>
</head>
<body>
    <div id="skip">
        <a href="#header">헤더 영역 바로가기</a>
        <a href="#main">콘텐츠 영역 바로가기</a>
        <a href="#footer">푸터 영역 바로가기</a>
    </div>
<?php include "../include/header.php" ?>
<?php include "../login/login.php" ?>
    
<main id="FAQ">
    <h2 class="blind">자주 묻는 질문 게시판입니다.</h2>
    <div class="notice__header top__container">
        <h2>FAQ</h2>
        <div class="home">
            <span><a href="#">
                <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8 17V11H12V17H17V9H20L10 0L0 9H3V17H8Z" fill="#323232"/>
                </svg>
                </a></span><span>FAQ</span>
        </div>
        <div class="menu">
            <li><a href="notice.php">NOTICE</a></li>
            <li><a href="FAQ.php" class="active">FAQ</a></li>
        </div>
        <div class="notice__search">
            <fieldset>
                <legend></legend>
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
    </div>
    <section class="mid__container">
        <div class="board">
            <div class="board__table">
                <table>
                    <colgroup>
                        <col style="width: 20%" />
                        <col style="width: 50%"/>
                        <col style="width: 20%" />
                        <col style="width: 10%" />
                    </colgroup>
                    <thead>
                        <tr>
                            <th>번호</th>
                            <th>제목</th>
                            <th>날짜</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>10</td>
                            <td>BODA 이용약관 개정 안내 (10/21)</td>
                            <td>2022-10-21</td>
                            <td><svg class="open" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L8 8L15 1" stroke="#888888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <svg class="close blind" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 8L8 0.999999L1 8" stroke="#888888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" class="content blind">
                                BODA 홈페이지 내 이용약관 내용을 개정하여 다음과 같이 안내드립니다.
                                <p class="box">
                                    [기존 약관]<br>
                                    제 1조 목적 어쩌고 저쩌고...<br><br>
                                    [수정된 약관]<br>
                                    제 1 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>
                                    [수정된 약관]<br>
                                    제 1 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>

                                    [기존 약관]<br>
                                    제 2조 목적 어쩌고 저쩌고...<br><br>
                                    [수정된 약관]<br>
                                    제 2 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>
                                    [수정된 약관]<br>
                                    제 2 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>BODA 이용약관 개정 안내 (10/21)</td>
                            <td>2022-10-21</td>
                            <td><svg class="open" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L8 8L15 1" stroke="#888888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <svg class="close blind" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 8L8 0.999999L1 8" stroke="#888888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" class="content blind">
                                BODA 홈페이지 내 이용약관 내용을 개정하여 다음과 같이 안내드립니다.
                                <p class="box">
                                    [기존 약관]<br>
                                    제 1조 목적 어쩌고 저쩌고...<br><br>
                                    [수정된 약관]<br>
                                    제 1 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>
                                    [수정된 약관]<br>
                                    제 1 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>

                                    [기존 약관]<br>
                                    제 2조 목적 어쩌고 저쩌고...<br><br>
                                    [수정된 약관]<br>
                                    제 2 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>
                                    [수정된 약관]<br>
                                    제 2 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>BODA 이용약관 개정 안내 (10/21)</td>
                            <td>2022-10-21</td>
                            <td><svg class="open" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L8 8L15 1" stroke="#888888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <svg class="close blind" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 8L8 0.999999L1 8" stroke="#888888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5" class="content blind">
                                BODA 홈페이지 내 이용약관 내용을 개정하여 다음과 같이 안내드립니다.
                                <p class="box">
                                    [기존 약관]<br>
                                    제 1조 목적 어쩌고 저쩌고...<br><br>
                                    [수정된 약관]<br>
                                    제 1 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>
                                    [수정된 약관]<br>
                                    제 1 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>

                                    [기존 약관]<br>
                                    제 2조 목적 어쩌고 저쩌고...<br><br>
                                    [수정된 약관]<br>
                                    제 2 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>
                                    [수정된 약관]<br>
                                    제 2 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>BODA 이용약관 개정 안내 (10/21)</td>
                            <td>2022-10-21</td>
                            <td><svg class="open" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L8 8L15 1" stroke="#888888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <svg class="close blind" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 8L8 0.999999L1 8" stroke="#888888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5" class="content blind">
                                BODA 홈페이지 내 이용약관 내용을 개정하여 다음과 같이 안내드립니다.
                                <p class="box">
                                    [기존 약관]<br>
                                    제 1조 목적 어쩌고 저쩌고...<br><br>
                                    [수정된 약관]<br>
                                    제 1 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>
                                    [수정된 약관]<br>
                                    제 1 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>

                                    [기존 약관]<br>
                                    제 2조 목적 어쩌고 저쩌고...<br><br>
                                    [수정된 약관]<br>
                                    제 2 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>
                                    [수정된 약관]<br>
                                    제 2 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>BODA 이용약관 개정 안내 (10/21)</td>
                            <td>2022-10-21</td>
                            <td><svg class="open" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L8 8L15 1" stroke="#888888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <svg class="close blind" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 8L8 0.999999L1 8" stroke="#888888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5" class="content blind">
                                BODA 홈페이지 내 이용약관 내용을 개정하여 다음과 같이 안내드립니다.
                                <p class="box">
                                    [기존 약관]<br>
                                    제 1조 목적 어쩌고 저쩌고...<br><br>
                                    [수정된 약관]<br>
                                    제 1 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>
                                    [수정된 약관]<br>
                                    제 1 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>

                                    [기존 약관]<br>
                                    제 2조 목적 어쩌고 저쩌고...<br><br>
                                    [수정된 약관]<br>
                                    제 2 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>
                                    [수정된 약관]<br>
                                    제 2 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>BODA 이용약관 개정 안내 (10/21)</td>
                            <td>2022-10-21</td>
                            <td><svg class="open" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L8 8L15 1" stroke="#888888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <svg class="close blind" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 8L8 0.999999L1 8" stroke="#888888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5" class="content blind">
                                BODA 홈페이지 내 이용약관 내용을 개정하여 다음과 같이 안내드립니다.
                                <p class="box">
                                    [기존 약관]<br>
                                    제 1조 목적 어쩌고 저쩌고...<br><br>
                                    [수정된 약관]<br>
                                    제 1 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>
                                    [수정된 약관]<br>
                                    제 1 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>

                                    [기존 약관]<br>
                                    제 2조 목적 어쩌고 저쩌고...<br><br>
                                    [수정된 약관]<br>
                                    제 2 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>
                                    [수정된 약관]<br>
                                    제 2 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>BODA 이용약관 개정 안내 (10/21)</td>
                            <td>2022-10-21</td>
                            <td><svg class="open" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L8 8L15 1" stroke="#888888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <svg class="close blind" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 8L8 0.999999L1 8" stroke="#888888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5" class="content blind">
                                BODA 홈페이지 내 이용약관 내용을 개정하여 다음과 같이 안내드립니다.
                                <p class="box">
                                    [기존 약관]<br>
                                    제 1조 목적 어쩌고 저쩌고...<br><br>
                                    [수정된 약관]<br>
                                    제 1 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>
                                    [수정된 약관]<br>
                                    제 1 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>

                                    [기존 약관]<br>
                                    제 2조 목적 어쩌고 저쩌고...<br><br>
                                    [수정된 약관]<br>
                                    제 2 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>
                                    [수정된 약관]<br>
                                    제 2 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>BODA 이용약관 개정 안내 (10/21)</td>
                            <td>2022-10-21</td>
                            <td><svg class="open" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L8 8L15 1" stroke="#888888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <svg class="close blind" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 8L8 0.999999L1 8" stroke="#888888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5" class="content blind">
                                BODA 홈페이지 내 이용약관 내용을 개정하여 다음과 같이 안내드립니다.
                                <p class="box">
                                    [기존 약관]<br>
                                    제 1조 목적 어쩌고 저쩌고...<br><br>
                                    [수정된 약관]<br>
                                    제 1 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>
                                    [수정된 약관]<br>
                                    제 1 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>

                                    [기존 약관]<br>
                                    제 2조 목적 어쩌고 저쩌고...<br><br>
                                    [수정된 약관]<br>
                                    제 2 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>
                                    [수정된 약관]<br>
                                    제 2 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>BODA 이용약관 개정 안내 (10/21)</td>
                            <td>2022-10-21</td>
                            <td><svg class="open" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L8 8L15 1" stroke="#888888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <svg class="close blind" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 8L8 0.999999L1 8" stroke="#888888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5" class="content blind">
                                BODA 홈페이지 내 이용약관 내용을 개정하여 다음과 같이 안내드립니다.
                                <p class="box">
                                    [기존 약관]<br>
                                    제 1조 목적 어쩌고 저쩌고...<br><br>
                                    [수정된 약관]<br>
                                    제 1 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>
                                    [수정된 약관]<br>
                                    제 1 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>

                                    [기존 약관]<br>
                                    제 2조 목적 어쩌고 저쩌고...<br><br>
                                    [수정된 약관]<br>
                                    제 2 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>
                                    [수정된 약관]<br>
                                    제 2 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>BODA 이용약관 개정 안내 (10/21)</td>
                            <td>2022-10-21</td>
                            <td><svg class="open" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L8 8L15 1" stroke="#888888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <svg class="close blind" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 8L8 0.999999L1 8" stroke="#888888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5" class="content blind">
                                BODA 홈페이지 내 이용약관 내용을 개정하여 다음과 같이 안내드립니다.
                                <p class="box">
                                    [기존 약관]<br>
                                    제 1조 목적 어쩌고 저쩌고...<br><br>
                                    [수정된 약관]<br>
                                    제 1 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>
                                    [수정된 약관]<br>
                                    제 1 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>

                                    [기존 약관]<br>
                                    제 2조 목적 어쩌고 저쩌고...<br><br>
                                    [수정된 약관]<br>
                                    제 2 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>
                                    [수정된 약관]<br>
                                    제 2 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- 반응형용 표 -->
            <div class="board__table2">
            <table>
                <colgroup>
                    <col style="width: 20%;">
                    <col style="width: 60%;">
                    <col style="width: 20%;">
                </colgroup>
                <thead>
                    <tr>
                        <th>번호</th>
                        <th>제목</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>10</td>
                        <td>BODA 이용약관 개정 안내 (10/21)</td>
                        <td>
                            <svg class="open" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L8 8L15 1" stroke="#888888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <svg class="close blind" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 8L8 0.999999L1 8" stroke="#888888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" class="content blind">
                            BODA 홈페이지 내 이용약관 내용을 개정하여 다음과 같이 안내드립니다.
                            <p class="box">
                                [기존 약관]<br>
                                제 1조 목적 어쩌고 저쩌고...<br><br>
                                [수정된 약관]<br>
                                제 1 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>
                                [수정된 약관]<br>
                                제 1 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>

                                [기존 약관]<br>
                                제 2조 목적 어쩌고 저쩌고...<br><br>
                                [수정된 약관]<br>
                                제 2 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>
                                [수정된 약관]<br>
                                제 2 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>09</td>
                        <td>BODA 이용약관 개정 안내 (10/21) BODA 이용약관 개정 안내 (10/21)</td>
                        <td>
                            <svg class="open" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L8 8L15 1" stroke="#888888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <svg class="close blind" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 8L8 0.999999L1 8" stroke="#888888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" class="content blind">
                            BODA 홈페이지 내 이용약관 내용을 개정하여 다음과 같이 안내드립니다.
                            <p class="box">
                                [기존 약관]<br>
                                제 1조 목적 어쩌고 저쩌고...<br><br>
                                [수정된 약관]<br>
                                제 1 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>
                                [수정된 약관]<br>
                                제 1 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>

                                [기존 약관]<br>
                                제 2조 목적 어쩌고 저쩌고...<br><br>
                                [수정된 약관]<br>
                                제 2 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>
                                [수정된 약관]<br>
                                제 2 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>08</td>
                        <td>BODA 이용약관 개정 안내 (10/21)</td>
                        <td>
                            <svg class="open" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L8 8L15 1" stroke="#888888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <svg class="close blind" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 8L8 0.999999L1 8" stroke="#888888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" class="content blind">
                            BODA 홈페이지 내 이용약관 내용을 개정하여 다음과 같이 안내드립니다.
                            <p class="box">
                                [기존 약관]<br>
                                제 1조 목적 어쩌고 저쩌고...<br><br>
                                [수정된 약관]<br>
                                제 1 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>
                                [수정된 약관]<br>
                                제 1 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>

                                [기존 약관]<br>
                                제 2조 목적 어쩌고 저쩌고...<br><br>
                                [수정된 약관]<br>
                                제 2 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>
                                [수정된 약관]<br>
                                제 2 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>07</td>
                        <td>BODA 이용약관 개정 안내 (10/21)</td>
                        <td>
                            <svg class="open" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L8 8L15 1" stroke="#888888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <svg class="close blind" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 8L8 0.999999L1 8" stroke="#888888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" class="content blind">
                            BODA 홈페이지 내 이용약관 내용을 개정하여 다음과 같이 안내드립니다.
                            <p class="box">
                                [기존 약관]<br>
                                제 1조 목적 어쩌고 저쩌고...<br><br>
                                [수정된 약관]<br>
                                제 1 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>
                                [수정된 약관]<br>
                                제 1 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>

                                [기존 약관]<br>
                                제 2조 목적 어쩌고 저쩌고...<br><br>
                                [수정된 약관]<br>
                                제 2 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>
                                [수정된 약관]<br>
                                제 2 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>06</td>
                        <td>BODA 이용약관 개정 안내 (10/21)</td>
                        <td>
                            <svg class="open" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L8 8L15 1" stroke="#888888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <svg class="close blind" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 8L8 0.999999L1 8" stroke="#888888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" class="content blind">
                            BODA 홈페이지 내 이용약관 내용을 개정하여 다음과 같이 안내드립니다.
                            <p class="box">
                                [기존 약관]<br>
                                제 1조 목적 어쩌고 저쩌고...<br><br>
                                [수정된 약관]<br>
                                제 1 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>
                                [수정된 약관]<br>
                                제 1 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>

                                [기존 약관]<br>
                                제 2조 목적 어쩌고 저쩌고...<br><br>
                                [수정된 약관]<br>
                                제 2 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>
                                [수정된 약관]<br>
                                제 2 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>05</td>
                        <td>BODA 이용약관 개정 안내 (10/21)</td>
                        <td>
                            <svg class="open" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L8 8L15 1" stroke="#888888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <svg class="close blind" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 8L8 0.999999L1 8" stroke="#888888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" class="content blind">
                            BODA 홈페이지 내 이용약관 내용을 개정하여 다음과 같이 안내드립니다.
                            <p class="box">
                                [기존 약관]<br>
                                제 1조 목적 어쩌고 저쩌고...<br><br>
                                [수정된 약관]<br>
                                제 1 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>
                                [수정된 약관]<br>
                                제 1 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>

                                [기존 약관]<br>
                                제 2조 목적 어쩌고 저쩌고...<br><br>
                                [수정된 약관]<br>
                                제 2 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>
                                [수정된 약관]<br>
                                제 2 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>04</td>
                        <td>BODA 이용약관 개정 안내 (10/21)</td>
                        <td>
                            <svg class="open" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L8 8L15 1" stroke="#888888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <svg class="close blind" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 8L8 0.999999L1 8" stroke="#888888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" class="content blind">
                            BODA 홈페이지 내 이용약관 내용을 개정하여 다음과 같이 안내드립니다.
                            <p class="box">
                                [기존 약관]<br>
                                제 1조 목적 어쩌고 저쩌고...<br><br>
                                [수정된 약관]<br>
                                제 1 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>
                                [수정된 약관]<br>
                                제 1 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>

                                [기존 약관]<br>
                                제 2조 목적 어쩌고 저쩌고...<br><br>
                                [수정된 약관]<br>
                                제 2 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>
                                [수정된 약관]<br>
                                제 2 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>03</td>
                        <td>BODA 이용약관 개정 안내 (10/21)</td>
                        <td>
                            <svg class="open" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L8 8L15 1" stroke="#888888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <svg class="close blind" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 8L8 0.999999L1 8" stroke="#888888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" class="content blind">
                            BODA 홈페이지 내 이용약관 내용을 개정하여 다음과 같이 안내드립니다.
                            <p class="box">
                                [기존 약관]<br>
                                제 1조 목적 어쩌고 저쩌고...<br><br>
                                [수정된 약관]<br>
                                제 1 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>
                                [수정된 약관]<br>
                                제 1 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>

                                [기존 약관]<br>
                                제 2조 목적 어쩌고 저쩌고...<br><br>
                                [수정된 약관]<br>
                                제 2 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>
                                [수정된 약관]<br>
                                제 2 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>BODA 이용약관 개정 안내 (10/21)</td>
                        <td>
                            <svg class="open" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L8 8L15 1" stroke="#888888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <svg class="close blind" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 8L8 0.999999L1 8" stroke="#888888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" class="content blind">
                            BODA 홈페이지 내 이용약관 내용을 개정하여 다음과 같이 안내드립니다.
                            <p class="box">
                                [기존 약관]<br>
                                제 1조 목적 어쩌고 저쩌고...<br><br>
                                [수정된 약관]<br>
                                제 1 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>
                                [수정된 약관]<br>
                                제 1 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>

                                [기존 약관]<br>
                                제 2조 목적 어쩌고 저쩌고...<br><br>
                                [수정된 약관]<br>
                                제 2 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>
                                [수정된 약관]<br>
                                제 2 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>BODA 이용약관 개정 안내 (10/21)</td>
                        <td>
                            <svg class="open" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L8 8L15 1" stroke="#888888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <svg class="close blind" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 8L8 0.999999L1 8" stroke="#888888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" class="content blind">
                            BODA 홈페이지 내 이용약관 내용을 개정하여 다음과 같이 안내드립니다.
                            <p class="box">
                                [기존 약관]<br>
                                제 1조 목적 어쩌고 저쩌고...<br><br>
                                [수정된 약관]<br>
                                제 1 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>
                                [수정된 약관]<br>
                                제 1 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>

                                [기존 약관]<br>
                                제 2조 목적 어쩌고 저쩌고...<br><br>
                                [수정된 약관]<br>
                                제 2 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...<br><br>
                                [수정된 약관]<br>
                                제 2 조 목적 어쩌고 저쩌고... 순댓국 먹고 싶네요...
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
            </div>
            
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
<!-- //footer -->
<?php include "../include/script.php" ?>
<!-- //login -->
</body>
</html>