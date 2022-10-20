<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXHIBITION TALK</title>
    <!-- CSS -->
    <?php include "../include/linktalk.php" ?>
</head>

<body>
    <?php include "../include/header.php" ?>
    <?php include "../login/login.php" ?>
    <!-- //header -->

    <main id="main">
        <h2 class="blind">전시 토크 게시판입니다.</h2>
        <div class="main__header top__container">
            <h2>EXHIBITION</h2>
            <h2>Talk</h2>
            <div class="home">
                <span>
                    <a href="#">
                    <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 17V11H12V17H17V9H20L10 0L0 9H3V17H8Z" fill="#323232"/>
                    </svg>
                    </a></span>
                <span>EXHIBITION TALK</span>
            </div>
        </div>
        <section class="mid__container">
            <div class="talk__write">
                <form action="talkWriteSave.php" name="TalkWrite" method="post">
                    <fieldset>
                        <legend class="blind">전시 토크 게시판 작성 영역</legend>
                        <button type="submit" class="btn">글쓰기</button>
                        <div>
                            <label class="blind" for="TalkContents">내용</label>
                            <textarea
                                name="TalkContents"
                                id="TalkContents"
                                rows="7"
                                placeholder="내용을 입력해 주세요."
                            ></textarea>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="board">
                <h2 class="blind">전시 토크 게시판 보기 영역입니다.</h2>
                <div class="board__table">
                    <table class="talk">
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
    $sql = "SELECT t.myTalkID, m.youNickName, t.TalkContents, t.TalkregTime FROM myTalk t JOIN myMember m ON(t.myMemberID = m.myMemberID) ORDER BY myTalkID DESC LIMIT ${viewLimit}, ${viewNum}";
    $result = $connect -> query($sql);

    if($result){
        $count = $result -> num_rows;

        if($count > 0){
            for($i=1; $i <= $count; $i++){
                $info = $result -> fetch_array(MYSQLI_ASSOC);
                echo "<tr><td class='comment comment_1'><div class='profile'></div><div class='contents'><div class='contents__top'>";
                echo "<p class='name'><span class='ir'>작성자</span><span>".$info['youNickName']."</span></p>";
                echo "<p class='date'><span class='ir'>작성일</span><span>| ".date('Y-m-d H:i', $info['TalkregTime'])."</span></p>";
                echo "<a href='#' class='remove'>| 삭제</a></div>";
                echo "<div class='contents__bottom'><span>".$info['TalkContents']."</span></div></div>";
                echo "</td></tr>";
            }
        }
    }
?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="board__pages">
                    <ul>
<?php
    $sql = "SELECT count(myTalkID) FROM myTalk";
    $result = $connect -> query($sql);

    $TalkCount = $result -> fetch_array(MYSQLI_ASSOC);
    $TalkCount = $TalkCount['count(myTalkID)'];

    $TalkCount = ceil($TalkCount / $viewNum);

    $pageCurrent = 5;
    $startPage = $page - $pageCurrent;
    $endPage = $page + $pageCurrent;

    // 처음 페이지 초기화
    if($startPage < 1) $startPage = 1;

    // 마지막 페이지 초기화
    if($endPage >= $TalkCount) $endPage = $TalkCount;

    // 이전 페이지, 처음 페이지 이동
    if($page != 1){
        $prevPage = $page - 1;
        echo "<li><a href='Talk.php?page=1'><svg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
        <path d='M17.2498 18L11.2498 12L17.2498 6' stroke='#323232' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
        <path d='M11.25 18L5.25 12L11.25 6' stroke='#323232' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
        </svg></a></li>";
        echo "<li><a href='Talk.php?page={$prevPage}'><svg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
        <path d='M14.25 6L8.25 12L14.25 18' stroke='#323232' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
        </svg></a></li>";
    }
    
    // 페이지 넘버 표시
    for($i=$startPage; $i<=$endPage; $i++){
        $active = "";
        if($i == $page) $active = "active";
        echo "<li ><a class='{$active}' href='Talk.php?page={$i}'>{$i}</a></li>";
    }
    
    // 다음 페이지, 마지막 페이지 이동
    if($page != $endPage){
        $nextPage = $page + 1;
        echo "<li><a href='Talk.php?page={$nextPage}'><svg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
        <path d='M9 18L15 12L9 6' stroke='#323232' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
        </svg></a></li>";
        echo "<li><a href='Talk.php?page={$TalkCount}'><svg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
        <path d='M6.75024 6L12.7502 12L6.75024 18' stroke='#323232' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
        <path d='M12.75 6L18.75 12L12.75 18' stroke='#323232' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
        </svg></a></li>";
    }
?>
                </ul>
            </div>
        </section>
    </main>

    <?php include "../include/footer.php" ?>
    <!-- //footer -->

    <?php include "../include/script.php" ?>
</body>
</html>