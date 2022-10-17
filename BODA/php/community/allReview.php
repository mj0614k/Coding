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

        <link rel="stylesheet" href="../../html/assets/css/fonts.css" />
        <link rel="stylesheet" href="../../html/assets/css/reset.css" />
        <link rel="stylesheet" href="../../html/assets/css/common.css" />

        <link rel="stylesheet" href="../../html/assets/css/header.css" />
        <link rel="stylesheet" href="../../html/assets/css/login.css">
        <link rel="stylesheet" href="../../html/assets/css/loginPopup.css">
        <link rel="stylesheet" href="../../html/assets/css/mainHeader.css">
        <link rel="stylesheet" href="../../html/assets/css/Review.css" />
        <link rel="stylesheet" href="../../html/assets/css/footer.css">
        <title>ALL REVIEW</title>
    </head>
    <body>
        <div id="skip">
            <a href="#header">헤더 영역 바로가기</a>
            <a href="#main">콘텐츠 영역 바로가기</a>
            <a href="#footer">푸터 영역 바로가기</a>
        </div>
        <?php include "../include/header.php" ?>
        <!-- //header -->

        <main id="main">
            <h2 class="blind">모든 리뷰 게시판입니다.</h2>
            <div class="main__header top__container">
                <h2>TODAY's</h2>
                <h2>Review</h2>
                <div class="home">
                <span><a href="#">
                    <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 17V11H12V17H17V9H20L10 0L0 9H3V17H8Z" fill="#323232"/>
                    </svg>
                    </a></span><span>ALL REVIEW</span></div>
                <div class="menu">
                    <li><a href="bestReview.html">BEST REVIEW</a></li>
                    <li><a href="allReview.html" class="active">ALL REVIEW</a></li>
                </div>
            </div>
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
<?php
    if(isset($_GET['page'])){
        $page = (int)$_GET['page'];
    } else {
        $page = 1;
    } 

    $viewNum = 10;
    $viewLimit = ($viewNum * $page) - $viewNum;

    // 두 개의 테이블 join
    $sql = "SELECT r.myReviewID, r.ReviewTitle, m.youNickName, r.regTime, r.ReviewView FROM myReview r JOIN myMember m ON(r.myMemberID = r.myMemberID) ORDER BY myReviewID DESC LIMIT ${viewLimit}, ${viewNum}";
    $result = $connect -> query($sql);

    if($result){
        $count = $result -> num_rows;

        if($count > 0){
            for($i=1; $i <= $count; $i++){
                $info = $result -> fetch_array(MYSQLI_ASSOC);
                echo "<tr>";
                echo "<td>".$info['myReviewID']."</td>";
                echo "<td><a href='allReviewView.php?myReviewID={$info['myReviewID']}'>".$info['ReviewTitle']."</a></td>";
                echo "<td>".$info['youNickName']."</td>";
                echo "<td>".date('Y-m-d', $info['regTime'])."</td>";
                echo "<td>".$info['ReviewView']."</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>게시글이 없습니다.</td></tr>";
        }
    }
?>

                                <!-- <tr>
                                    <td>10</td>
                                    <td><a href="allreviewView.html">진짜 멋진 포토존 어쩌고</a></td>
                                    <td>둘리</td>
                                    <td>2022-10-05</td>
                                    <td>123</td>
                                    <td>1.1K</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td><a href="allreviewView.html">진짜 멋진 포토존 어쩌고</a></td>
                                    <td>둘리</td>
                                    <td>2022-10-05</td>
                                    <td>123</td>
                                    <td>1.1K</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td><a href="allreviewView.html">진짜 멋진 포토존 어쩌고</a></td>
                                    <td>둘리</td>
                                    <td>2022-10-05</td>
                                    <td>123</td>
                                    <td>1.1K</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td><a href="allreviewView.html">진짜 멋진 포토존 어쩌고</a></td>
                                    <td>둘리</td>
                                    <td>2022-10-05</td>
                                    <td>123</td>
                                    <td>1.1K</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td><a href="allreviewView.html">진짜 멋진 포토존 어쩌고</a></td>
                                    <td>둘리</td>
                                    <td>2022-10-05</td>
                                    <td>123</td>
                                    <td>1.1K</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td><a href="allreviewView.html">진짜 멋진 포토존 어쩌고</a></td>
                                    <td>둘리</td>
                                    <td>2022-10-05</td>
                                    <td>123</td>
                                    <td>1.1K</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td><a href="allreviewView.html">진짜 멋진 포토존 어쩌고</a></td>
                                    <td>둘리</td>
                                    <td>2022-10-05</td>
                                    <td>123</td>
                                    <td>1.1K</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><a href="allreviewView.html">진짜 멋진 포토존 어쩌고</a></td>
                                    <td>둘리</td>
                                    <td>2022-10-05</td>
                                    <td>123</td>
                                    <td>1.1K</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><a href="allreviewView.html">진짜 멋진 포토존 어쩌고</a></td>
                                    <td>둘리</td>
                                    <td>2022-10-05</td>
                                    <td>123</td>
                                    <td>1.1K</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td><a href="allreviewView.html">진짜 멋진 포토존 어쩌고</a></td>
                                    <td>둘리</td>
                                    <td>2022-10-05</td>
                                    <td>123</td>
                                    <td>1.1K</td>
                                </tr> -->
                            </tbody>
                        </table>
                        <div class="board__btn">
                            <a href="ReviewWrite.html">
                                글쓰기
                            </a>
                        </div>
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

        <script src="../assets/js/headermenu.js"></script>
        <script src="../assets/js/loginpopup.js"></script>
    </body>
</html>
