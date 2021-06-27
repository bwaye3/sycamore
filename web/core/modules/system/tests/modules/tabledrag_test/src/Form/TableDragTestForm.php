<?php

namespace Drupal\tabledrag_test\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\State\StateInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides a form for draggable table testing.
 */
class TableDragTestForm extends FormBase {

  /**
   * The state service.
   *
   * @var \Drupal\Core\State\StateInterface
   */
  protected $state;

  /**
   * Constructs a TableDragTestForm object.
   *
   * @param \Drupal\Core\State\StateInterface $state
   *   The state service.
   */
  public function __construct(StateInterface $state) {
    $this->state = $state;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static($container->get('state'));
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'tabledrag_test_form';
  }

  /**
<<<<<<< HEAD
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['table'] = [
=======
   * Builds the draggable test table.
   *
   * @param array $rows
   *   (optional) Rows that should be shown on the table. Default value is an
   *   empty array.
   * @param string $table_id
   *   (optional) An HTML ID for the table, defaults to 'tabledrag-test-table'.
   * @param string $group_prefix
   *   (optional) A prefix for HTML classes generated in the method, defaults to
   *   'tabledrag-test'.
   * @param bool $indentation
   *   (optional) A boolean indicating whether the rows can be indented,
   *   defaults to TRUE.
   *
   * @return array
   *   The renderable array of the draggable table used for testing.
   */
  protected function buildTestTable(array $rows = [], $table_id = 'tabledrag-test-table', $group_prefix = 'tabledrag-test', $indentation = TRUE) {
    $tabledrag = [
      [
        'action' => 'order',
        'relationship' => 'sibling',
        'group' => "$group_prefix-weight",
      ],
    ];

    if ($indentation) {
      $tabledrag[] = [
        'action' => 'match',
        'relationship' => 'parent',
        'group' => "$group_prefix-parent",
        'subgroup' => "$group_prefix-parent",
        'source' => "$group_prefix-id",
        'hidden' => TRUE,
        'limit' => 2,
      ];
      $tabledrag[] = [
        'action' => 'depth',
        'relationship' => 'group',
        'group' => "$group_prefix-depth",
        'hidden' => TRUE,
      ];
    }

    $table = [
>>>>>>> dev
      '#type' => 'table',
      '#header' => [
        [
          'data' => $this->t('Text'),
<<<<<<< HEAD
          'colspan' => 4,
        ],
        $this->t('Weight'),
      ],
      '#tabledrag' => [
        [
          'action' => 'order',
          'relationship' => 'sibling',
          'group' => 'tabledrag-test-weight',
        ],
        [
          'action' => 'match',
          'relationship' => 'parent',
          'group' => 'tabledrag-test-parent',
          'subgroup' => 'tabledrag-test-parent',
          'source' => 'tabledrag-test-id',
          'hidden' => TRUE,
          'limit' => 2,
        ],
        [
          'action' => 'depth',
          'relationship' => 'group',
          'group' => 'tabledrag-test-depth',
          'hidden' => TRUE,
        ],
      ],
      '#attributes' => ['id' => 'tabledrag-test-table'],
=======
          'colspan' => $indentation ? 4 : 2,
        ],
        $this->t('Weight'),
      ],
      '#tabledrag' => $tabledrag,
      '#attributes' => ['id' => $table_id],
>>>>>>> dev
      '#attached' => ['library' => ['tabledrag_test/tabledrag']],
    ];

    // Provide a default set of five rows.
<<<<<<< HEAD
    $rows = $this->state->get('tabledrag_test_table', array_flip(range(1, 5)));
=======
    $rows = !empty($rows) ? $rows :
      $this->state->get('tabledrag_test_table', array_flip(range(1, 5)));

>>>>>>> dev
    foreach ($rows as $id => $row) {
      if (!is_array($row)) {
        $row = [];
      }

      $row += [
        'parent' => '',
        'weight' => 0,
        'depth' => 0,
        'classes' => [],
        'draggable' => TRUE,
      ];

      if (!empty($row['draggable'])) {
        $row['classes'][] = 'draggable';
      }

<<<<<<< HEAD
      $form['table'][$id] = [
        'title' => [
          'indentation' => [
            '#theme' => 'indentation',
            '#size' => $row['depth'],
=======
      $table[$id] = [
        'title' => [
          'indentation' => [
            '#theme' => 'indentation',
            '#size' => $indentation ? $row['depth'] : 0,
>>>>>>> dev
          ],
          '#plain_text' => "Row with id $id",
        ],
        'id' => [
          '#type' => 'hidden',
          '#value' => $id,
<<<<<<< HEAD
          '#attributes' => ['class' => ['tabledrag-test-id']],
        ],
        'parent' => [
          '#type' => 'hidden',
          '#default_value' => $row['parent'],
          '#parents' => ['table', $id, 'parent'],
          '#attributes' => ['class' => ['tabledrag-test-parent']],
        ],
        'depth' => [
          '#type' => 'hidden',
          '#default_value' => $row['depth'],
          '#attributes' => ['class' => ['tabledrag-test-depth']],
        ],
        'weight' => [
          '#type' => 'weight',
          '#default_value' => $row['weight'],
          '#attributes' => ['class' => ['tabledrag-test-weight']],
        ],
        '#attributes' => ['class' => $row['classes']],
      ];
    }

    $form['save'] = [
      '#type' => 'submit',
      '#value' => $this->t('Save'),
    ];
=======
          '#parents' => ['table', $id, 'id'],
          '#attributes' => ['class' => ["$group_prefix-id"]],
        ],
        '#attributes' => ['class' => $row['classes']],
      ];

      if ($indentation) {
        $table[$id]['parent'] = [
          '#type' => 'hidden',
          '#default_value' => $row['parent'],
          '#parents' => ['table', $id, 'parent'],
          '#attributes' => ['class' => ["$group_prefix-parent"]],
        ];
        $table[$id]['depth'] = [
          '#type' => 'hidden',
          '#default_value' => $row['depth'],
          '#parents' => ['table', $id, 'depth'],
          '#attributes' => ['class' => ["$group_prefix-depth"]],
        ];
      }

      $table[$id]['weight'] = [
        '#type' => 'weight',
        '#default_value' => $row['weight'],
        '#parents' => ['table', $id, 'weight'],
        '#attributes' => ['class' => ["$group_prefix-weight"]],
      ];
    }

    return $table;
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    // Provide a default set of five rows.
    $form['table'] = $this->buildTestTable();
    $form['actions'] = $this->buildFormActions();
>>>>>>> dev

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
<<<<<<< HEAD
    $test_table = [];
    foreach ($form_state->getValue('table') as $row) {
      $test_table[$row['id']] = $row;
    }

    $this->state->set('tabledrag_test_table', $test_table);
=======
    $operation = isset($form_state->getTriggeringElement()['#op']) ?
      $form_state->getTriggeringElement()['#op'] :
      'save';

    switch ($operation) {
      case 'reset':
        $this->state->set('tabledrag_test_table', array_flip(range(1, 5)));
        break;

      default:
        $test_table = [];
        foreach ($form_state->getValue('table') as $row) {
          $test_table[$row['id']] = $row;
        }
        $this->state->set('tabledrag_test_table', $test_table);
        break;
    }
  }

  /**
   * Builds the test table form actions.
   *
   * @return array
   *   The renderable array of form actions.
   */
  protected function buildFormActions() {
    return [
      '#type' => 'actions',
      'save' => [
        '#type' => 'submit',
        '#value' => $this->t('Save'),
      ],
      'reset' => [
        '#type' => 'submit',
        '#op' => 'reset',
        '#value' => $this->t('Reset'),
      ],
    ];
>>>>>>> dev
  }

}
