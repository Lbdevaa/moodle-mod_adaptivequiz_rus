<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

$string['modulenameplural'] = 'Адаптивное тестирование';
$string['modulename'] = 'Адаптивное тестирование';
$string['modulename_help'] = 'The Adaptive Quiz activity enables a teacher to create quizes that efficiently measure the takers\' abilities. Adaptive quizes are comprised  of questions selected from the question bank that are tagged with a score of their difficulty. The questions are chosen to match the estimated ability level of the  current test-taker. If the test-taker succeeds on a question, a more challenging question is presented next. If the test-taker answers a question incorrectly, a less-challenging question is presented next. This technique will develop into a sequence of questions converging on the test-taker\'s effective ability level. The quiz stops when the test-taker\'s ability is determined to the required accuracy.

This activity is best suited to determining an ability measure along a unidimensional scale. While the scale can be very broad, the questions must all provide a measure of ability or aptitude on the same scale. In a placement test for example, questions low on the scale that novices are able to answer correctly should also be answerable by experts, while questions higher on the scale should only be answerable by experts or a lucky guess. Questions that do not discriminate between takers of different abilities on will make the test ineffective and may provide inconclusive results.

Questions used in the Adaptive Quiz must

 * be automatically scored as correct/incorrect
 * be tagged with their difficulty using \'adpq_\' followed by a positive integer that is within the range for the quiz

The Adaptive Quiz can be configured to

 * define the range of question-difficulties/user-abilities to be measured. 1-10, 1-16, and 1-100 are examples of valid ranges.
 * define the precision required before the quiz is stopped. Often an error of 5% in the ability measure is an appropriate stopping rule
 * require a minimum number of questions to be answered
 * require a maximum number of questions that can be answered

This description and the testing process in this activity are based on <a href="http://www.rasch.org/memo69.pdf">Computer-Adaptive Testing: A Methodology Whose Time Has Come</a> by John Michael Linacre, Ph.D. MESA Psychometric Laboratory - University of Chicago. MESA Memorandum No. 69.';
$string['pluginadministration'] = 'Адаптивное тестирование';
$string['pluginname'] = 'Адаптивное тестирование';
$string['nonewmodules'] = 'No Adaptive Quiz instances found';
$string['adaptivequizname'] = 'Название';
$string['adaptivequizname_help'] = 'Введите название адаптивного теста';
$string['adaptivequiz:addinstance'] = 'Добавить новый адаптивный тест';
$string['adaptivequiz:viewreport'] = 'Показать отчёт теста';
$string['adaptivequiz:reviewattempts'] = 'Review adaptive quiz submissions';
$string['adaptivequiz:attempt'] = 'Attempt adaptive quiz';
$string['adaptivequiz:questionanalysis'] = 'Access to question analysis report';
$string['adaptivequiz:reviewownattempts'] = 'Ability ro review own attempt';
$string['attemptsallowed'] = 'Attempts allowed';
$string['attemptsallowed_help'] = 'The number of times a student may attempt this activity';
$string['requirepassword'] = 'Required password';
$string['requirepassword_help'] = 'Students are required to enter a password before beginning their attempt';
$string['browsersecurity'] = 'Browser security';
$string['browsersecurity_help'] = 'If "Full screen pop-up with some JavaScript security" is selected the quiz will only start if the student has a JavaScript-enabled web-browser, the quiz appears in a full screen popup window that covers all the other windows and has no navigation controls and students are prevented, as far as is possible, from using facilities like copy and paste';
$string['minimumquestions'] = 'Минимальное количество вопросов';
$string['minimumquestions_help'] = 'Минимальное количество вопросов, на которые студент должен ответить';
$string['maximumquestions'] = 'Максимальное количество вопросов';
$string['maximumquestions_help'] = 'Максимальное количество вопросов, на которые студент должен ответить';
$string['startinglevel'] = 'Начальный уровень сложности';
$string['startinglevel_help'] = 'The the student begins an attempt, the activity will randomly select a question matching the level of difficulty';
$string['lowestlevel'] = 'Минимальный уровень сложности';
$string['lowestlevel_help'] = 'The lowest or least difficult level the assessment can select questions from.  During an attempt the activity will not go beyond this level of difficulty';
$string['highestlevel'] = 'Максимальный уровнь сложности';
$string['highestlevel_help'] = 'The highest or most difficult level the assessment can select questions from.  During an attempt the activity will not go beyond this level of difficulty';
$string['questionpool'] = 'Банк вопросов';
$string['questionpool_help'] = 'Select the question category(ies) where the activity will pull questions from during an attempt.';
$string['formelementempty'] = 'Введите положительное целое число от 1 до 999';
$string['formelementnumeric'] = 'Введите числовое значение от 1 до 999';
$string['formelementnegative'] = 'Введите положительное целое число1 до 999';
$string['formminquestgreaterthan'] = 'Минимальное количество вопросов должно быть меньше максимального количества вопросов.';
$string['formlowlevelgreaterthan'] = 'Минимальный уровень должен быть меньше самого высокого уровня';
$string['formstartleveloutofbounds'] = 'Начальный уровень должен быть числом, которое находится между самым низким и самым высоким уровнем.';
$string['standarderror'] = 'Стандартная ошибка для остановки';
$string['standarderror_help'] = 'When the amount of error in the measure of the user\'s ability drops below this amount, the quiz will stop. Tune this value from the default of 5% to require more or less precision in the ability measure';
$string['formelementdecimal'] = 'Input a decimal number.  Maximum 10 digits long and maximum 5 digits to the right of the decimal point';
$string['attemptfeedback'] = 'Attempt feedback';
$string['attemptfeedback_help'] = 'The attempt feedback is displayed to the user once the attempt is finished';
$string['formquestionpool'] = 'Select at least one question category';
$string['submitanswer'] = 'Отправить ответ';
$string['nextquestion'] = 'Следующий вопрос'; //mathetest
$string['startattemptbtn'] = 'Начать тест';
$string['viewreportbtn'] = 'Посмотреть отчет';
$string['errorfetchingquest'] = 'Невозможно получить вопросы для уровня {$a->level}';
$string['leveloutofbounds'] = 'Requested level {$a->level} out of bounds for the attempt';
$string['errorattemptstate'] = 'There was an error in determining the state of the attempt';
$string['nopermission'] = 'You don\t have permission to view this resource';
$string['maxquestattempted'] = 'Maximum number of questions attempted';
$string['notyourattempt'] = 'This is not your attempt at the activity';
$string['noattemptsallowed'] = 'Попыток больше нет';
$string['completeattempterror'] = 'Ошибка при попытке завершить запись теста';
$string['updateattempterror'] = 'Ошибка при попытке обновления записи попытки';
$string['numofattemptshdr'] = 'Количество попыток';
$string['standarderrorhdr'] = 'Стандартная ошибка';
$string['errorlastattpquest'] = 'Ошибка при проверке значения ответа на последний заданный вопрос';
$string['errornumattpzero'] = 'Error with number of questions attempted equals zero, but user submitted an answer to previous question';
$string['errorsumrightwrong'] = 'Sum of correct and incorrect answers does not equal the total number of questions attempted';
$string['calcerrorwithinlimits'] = 'Calculated standard error of {$a->calerror} is within the limits imposed by the activity {$a->definederror}';
$string['missingtagprefix'] = 'Отсутствует префикс тега';
$string['recentactquestionsattempted'] = 'Задаваемые вопросы: {$a}';
$string['recentattemptstate'] = 'Состояние попытки:';
$string['recentinprogress'] = 'В процессе';
$string['notinprogress'] = 'Эта попытка не выполняется.';
$string['recentcomplete'] = 'Завершено';
$string['functiondisabledbysecuremode'] = 'Эта функция в настоящее время отключена';
$string['enterrequiredpassword'] = 'Введите пароль';
$string['requirepasswordmessage'] = 'Чтобы пройти этот тест, вам необходимо знать пароль теста.';
$string['wrongpassword'] = 'Неверный пароль';
$string['noattemptrecords'] = 'Нет записей о тестах для этого учащегося';
$string['attemptstate'] = 'Состояние попытки';
$string['attemptstopcriteria'] = 'Причина остановки теста';
$string['questionsattempted'] = 'Сумма заданных вопросов';
$string['attemptfinishedtimestamp'] = 'Время попытки закончилось';
$string['backtomainreport'] = 'Вернуться к основным отчетам';
$string['reviewattempt'] = 'Посмотреть тест';
$string['indvuserreport'] = 'Отчет о тестах для отдельных пользователей {$a}';
$string['activityreports'] = 'Отчет о попытках';
$string['stopingconditionshdr'] = 'Условия остановки';
$string['backtoviewattemptreport'] = 'Вернуться к просмотру отчета о тесте';
$string['backtoviewreport'] = 'Вернуться к основным отчетам';
$string['reviewattemptreport'] = 'Рассмотрение попытки, сделанной {$a->fullname} представлены на {$a->finished}';
$string['deleteattemp'] = 'Удалить попытку';
$string['confirmdeleteattempt'] = 'Подтверждение удаления попытки {$a->name} представлены на {$a->timecompleted}';
$string['attemptdeleted'] = 'Попытка удалена {$a->name} представлены на {$a->timecompleted}';
$string['errordeletingattempt'] = 'Запись о тесте не найдена';
$string['closeattempt'] = 'Закрыть тест';
$string['confirmcloseattempt'] = 'Вы уверены, что хотите закрыть и завершить эту попытку {$a->name}?';
$string['confirmcloseattemptstats'] = 'Эта попытка была начата {$a->started} и последний раз обновлялась {$a->modified}.';
$string['confirmcloseattemptscore'] = 'на {$a->num_questions} вопросов были даны ответы, и пока что оценка {$a->measure} {$a->standarderror}.';
$string['attemptclosedstatus'] = 'Закрыто вручную {$a->current_user_name} (user-id: {$a->current_user_id}) в {$a->now}.';
$string['attemptclosed'] = 'Попытка закрыта вручную.';
$string['errorclosingattempt'] = 'Запись о тесте не найдена';
$string['errorclosingattempt_alreadycomplete'] = 'Эта попытка уже завершена, ее нельзя закрыть вручную.';
$string['formstderror'] = 'Необходимо ввести процентное значение меньше 50 и больше или равно 0.';
$string['backtoviewattemptreport'] = 'Вернуться к просмотру отчета о попытке';
$string['backtoviewreport'] = 'Вернуться к основным отчетам';
$string['reviewattemptreport'] = 'Рассмотрение попытки, сделанной {$a->fullname} представлены на {$a->finished}';
$string['score'] = 'Оценка';
$string['bestscore'] = 'Лучшая оценка';
$string['bestscorestderror'] = 'Стандартная ошибка';
$string['attempt_summary'] = 'Резюме по тесту';
$string['scoring_table'] = 'Таблицы подсчета оценок';
$string['attempt_questiondetails'] = 'Детали вопроса';
$string['attemptstarttime'] = 'Время начала попытки';
$string['attempttotaltime'] = 'Общее время (hh:mm:ss)';
$string['attempt_user'] = 'Пользователь';
$string['attempt_state'] = 'Состояние попытки';
$string['attemptquestion_num'] = '#';
$string['attemptquestion_level'] = 'Сложность вопроса';
$string['attemptquestion_rightwrong'] = 'Right/Wrong';
$string['attemptquestion_ability'] = 'Ability Measure';
$string['attemptquestion_error'] = 'Стандартная ошибка (&plusmn;&nbsp;x%)';
$string['attemptquestion_difficulty'] = 'Сложность вопроса (logits)';
$string['attemptquestion_diffsum'] = 'Сумма сложности';
$string['attemptquestion_abilitylogits'] = 'Measured Ability (logits)';
$string['attemptquestion_stderr'] = 'Стандартная ошибка (&plusmn;&nbsp;logits)';
$string['graphlegend_target'] = 'Целевой уровень';
$string['graphlegend_error'] = 'Стандартная ошибка';
$string['unknownuser'] = 'Неизвестный пользователь';
$string['answerdistgraph_title'] = 'Распределение ответов для {$a->firstname} {$a->lastname}';
$string['answerdistgraph_questiondifficulty'] = 'Сложность вопроса';
$string['answerdistgraph_numrightwrong'] = 'Num wrong (-)  /  Num right (+)';
$string['answerdistgraph_right'] = 'Верно';
$string['answerdistgraph_wrong'] = 'Неверно';
$string['numright'] = 'Num right';
$string['numwrong'] = 'Num wrong';
$string['questionnumber'] = 'Вопрос #';
$string['na'] = 'n/a';
$string['downloadcsv'] = 'Скачать CSV';

$string['grademethod'] = 'Метод оценки';
$string['gradehighest'] = 'Высокая оценка';
$string['attemptfirst'] = 'Первая попытка';
$string['attemptlast'] = 'Последняя попытка';
$string['grademethod_help'] = 'When multiple attempts are allowed, the following methods are available for calculating the final quiz grade:

* Highest grade of all attempts
* First attempt (all other attempts are ignored)
* Last attempt (all other attempts are ignored)';
$string['resetadaptivequizsall'] = 'Удалить все попытки адаптивного теста';
$string['all_attempts_deleted'] = 'Все попытки адаптивного теста были удалены.';
$string['all_grades_removed'] = 'Все оценки адаптивного теста были удалены.';

$string['questionanalysisbtn'] = 'Анализ вопросов';
$string['id'] = 'ID';
$string['name'] = 'Имя';
$string['questions_report'] = 'Отчет о вопросах';
$string['question_report'] = 'Анализ вопросов';
$string['times_used_display_name'] = 'Используемое время';
$string['percent_correct_display_name'] = '% Correct';
$string['discrimination_display_name'] = 'Discrimination';
$string['back_to_all_questions'] = '&laquo; Back to all questions';
$string['answers_display_name'] = 'Ответы';
$string['answer'] = 'Ответ';
$string['statistic'] = 'Статистика';
$string['value'] = 'Значение';
$string['highlevelusers'] = 'Users above the question-level';
$string['midlevelusers'] = 'Users near the question-level';
$string['lowlevelusers'] = 'Users below the question-level';
$string['user'] = 'Пользователь';
$string['result'] = 'Результат';
