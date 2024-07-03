<?php

/**
 * @file
 * Custom Controller class.
 */

namespace Drupal\workbc_cdq_custom\Controller;

use Drupal\Core\Controller\ControllerBase;

class QuizResultsController extends ControllerBase {

  protected function getScores($submission) {
    $quiz = $submission->getWebform();
    $questions = $quiz->getElementsDecodedAndFlattened();
    $answers = $submission->getData();
    $settings = $quiz->get('third_party_settings');
    $categories = array_reduce(\Drupal::entityTypeManager()->getStorage('taxonomy_term')->loadTree($settings['workbc_cdq_career_match']['categories']), function($categories, $category) {
      $categories[$category->name] = [
        'score' => 0,
        'count' => 0,
        'term' => $category,
      ];
      return $categories;
    });
    $results = [];
    foreach ($answers as $key => $value) {
      $category = $questions[$key]['#category'];
      $score = floatval($value);
      $categories[$category]['score'] += $score;
      $categories[$category]['count'] += 1;
      $results[$questions[$key]['#category']] = $score;
    }
    return [
      'categories' => $categories,
      'answers' => $results,
    ];
  }

  public function abilities_quiz_results() {
    $submission = getUserSubmission('abilities_quiz');
    if ($submission) {
      $markup = "";
      foreach ($this->getScores($submission)['categories'] as $category => $data) {
        $percent = $data['score'] / ($data['count'] * 4) * 100;
        $markup .= "<p>$category: <b>$percent%</b></p>";
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
      foreach ($this->getScores($submission)['categories'] as $category => $data) {
        $percent = $data['score'] / ($data['count'] * 4) * 100;
        $markup .= "<p>$category: <b>$percent%</b></p>";
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
      foreach ($this->getScores($submission)['categories'] as $category => $data) {
        $percent = $data['score'] / ($data['count'] * 4) * 100;
        $markup .= "<p>$category: <b>$percent%</b></p>";
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
      foreach ($this->getScores($submission)['categories'] as $category => $data) {
        $percent = $data['score'] / ($data['count'] * 4) * 100;
        $markup .= "<p>$category: <b>$percent%</b></p>";
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
      foreach ($this->getScores($submission)['categories'] as $category => $data) {
        $percent = $data['score'] / ($data['count'] * 4) * 100;
        $markup .= "<p>$category: <b>$percent%</b></p>";
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
      foreach ($this->getScores($submission)['categories'] as $category => $data) {
        $percent = $data['score'] / ($data['count'] * 4) * 100;
        $markup .= "<p>$category: <b>$percent%</b></p>";
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
