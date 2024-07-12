<?php

/**
 * @file
 * Custom Controller class.
 */

namespace Drupal\workbc_cdq_custom\Controller;

use Drupal\Core\Controller\ControllerBase;

class QuizResultsController extends ControllerBase {

  public function abilities_quiz_results() {
    $submission = getUserSubmission('abilities_quiz');
    if ($submission) {
      $markup = "";
      $score = getSubmissionScore($submission);
      foreach ($score as $category_name => $category) {
        $percent = $category['percent'];
        $normalized = $category['normalized'];
        $markup .= "<p>$category_name: <b>$percent% ($normalized)</b></p>";
      }
    }
    else {
      $markup = "No results found";
    }
    return [
      '#type' => 'markup',
      '#markup' => $markup,
      '#cache' => ['max-age' => 0],
    ];
  }

  public function work_preferences_quiz_results() {
    $submission = getUserSubmission('work_preferences_quiz');
    if ($submission) {
      $markup = "";
      $score = getSubmissionScore($submission);
      foreach ($score as $category_name => $category) {
        $percent = $category['percent'];
        $normalized = $category['normalized'];
        $markup .= "<p>$category_name: <b>$percent% ($normalized)</b></p>";
      }
    }
    else {
      $markup = "No results found";
    }
    return [
      '#type' => 'markup',
      '#markup' => $markup,
      '#cache' => ['max-age' => 0],
    ];
  }

  public function interests_quiz_results() {
    $submission = getUserSubmission('interests_quiz');
    if ($submission) {
      $markup = "";
      $score = getSubmissionScore($submission);
      foreach ($score as $category_name => $category) {
        $percent = $category['percent'];
        $normalized = $category['normalized'];
        $markup .= "<p>$category_name: <b>$percent% ($normalized)</b></p>";
      }
    }
    else {
      $markup = "No results found";
    }
    return [
      '#type' => 'markup',
      '#markup' => $markup,
      '#cache' => ['max-age' => 0],
    ];
  }

  public function multiple_intelligences_quiz_results() {
    $submission = getUserSubmission('multiple_intelligences_quiz');
    if ($submission) {
      $markup = "";
      $score = getSubmissionScore($submission);
      foreach ($score as $category_name => $category) {
        $percent = $category['percent'];
        $normalized = $category['normalized'];
        $markup .= "<p>$category_name: <b>$percent% ($normalized)</b></p>";
      }
    }
    else {
      $markup = "No results found";
    }
    return [
      '#type' => 'markup',
      '#markup' => '',
      '#cache' => ['max-age' => 0],
    ];
  }

  public function learning_styles_quiz_results() {
    $submission = getUserSubmission('learning_styles_quiz');
    if ($submission) {
      $markup = "";
      $score = getSubmissionScore($submission);
      foreach ($score as $category_name => $category) {
        $percent = $category['percent'];
        $normalized = $category['normalized'];
        $markup .= "<p>$category_name: <b>$percent% ($normalized)</b></p>";
      }
    }
    else {
      $markup = "No results found";
    }
    return [
      '#type' => 'markup',
      '#markup' => '',
      '#cache' => ['max-age' => 0],
    ];
  }

  public function work_values_quiz_results() {
    $submission = getUserSubmission('work_values_quiz');
    if ($submission) {
      $markup = "";
      $score = getSubmissionScore($submission);
      foreach ($score as $category_name => $category) {
        $percent = $category['percent'];
        $normalized = $category['normalized'];
        $markup .= "<p>$category_name: <b>$percent% ($normalized)</b></p>";
      }
    }
    else {
      $markup = "No results found";
    }
    return [
      '#type' => 'markup',
      '#markup' => '',
      '#cache' => ['max-age' => 0],
    ];
  }
}
