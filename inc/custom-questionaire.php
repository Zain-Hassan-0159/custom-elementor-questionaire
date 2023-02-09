<?php

/**
 *  Custom Elementor Questionaire
 *
 * @package            Custom Elementor Questionaire
 * @author            Zain Hassan
 *
 */
   


/**
 * Elementor List Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */

 if(!defined('ABSPATH')){
    exit;
    }
class questionaireCustom_widget_elementor extends \Elementor\Widget_Base {
	

	public function get_style_depends() {

	//	wp_register_style( 'questionaire-style', plugins_url( 'assets/css/style.css', __FILE__ ) );

		return [
		//	'questionaire-style',
		];

	}
	

	/**
	 * Get widget name.
	 *
	 * Retrieve company widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'Questionaire';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve company widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'Questionaire', 'elementor-questionaire' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve company widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-wordpress';
	}

	/**
	 * Get custom help URL.
	 *
	 * Retrieve a URL where the user can get more information about the widget.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget help URL.
	 */
	public function get_custom_help_url() {
		return 'https://developers.elementor.com/widgets/';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the company of categories the company widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'el-custom-questionaire' ];
	}

	/**
	 * Get widget keywords.
	 *
	 * Retrieve the company of keywords the company widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return array Widget keywords.
	 */
	public function get_keywords() {
		return [ 'questionaire', 'widgets', 'custom', 'questionaire widgets' ];
	}

	/**
	 * Register company widget controls.
	 *
	 * Add input fields to allow the user to customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Questionaire Slide 1', 'elementor-questionaire' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
        $repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'questions_slOne', [
				'label' => __( 'Question', 'elementor-questionaire' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
			]
		);
        $repeater->add_control(
			'pointsYes_slOne', [
				'label' => __( 'Points (Yes)', 'elementor-questionaire' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
			]
		);
        $repeater->add_control(
			'pointsNo_slOne', [
				'label' => __( 'Points (No)', 'elementor-questionaire' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
			]
		);
		
		$this->add_control(
			'questions_list_slOne',
			[
				'label' => __( 'Add Questions', 'elementor-questionaire' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
                'default' => [
					[
						'questions_slOne' => esc_html__( 'do you snore loudly?', 'elementor-questionaire' ),
						'pointsYes_slOne' => esc_html__( '12', 'elementor-questionaire' ),
						'pointsNo_slOne' => esc_html__( '5', 'elementor-questionaire' ),
					],
					[
						'questions_slOne' => esc_html__( 'Do you often feel exhausted or tired during the day?', 'elementor-questionaire' ),
						'pointsYes_slOne' => esc_html__( '11', 'elementor-questionaire' ),
						'pointsNo_slOne' => esc_html__( '13', 'elementor-questionaire' ),
					],
					[
						'questions_slOne' => esc_html__( 'Have you ever experienced pauses in breathing while you were sleeping?', 'elementor-questionaire' ),
						'pointsYes_slOne' => esc_html__( '3', 'elementor-questionaire' ),
						'pointsNo_slOne' => esc_html__( '9', 'elementor-questionaire' ),
					],
					[
						'questions_slOne' => esc_html__( 'Do you have high blood pressure or are you being treated for hypertension?', 'elementor-questionaire' ),
						'pointsYes_slOne' => esc_html__( '55', 'elementor-questionaire' ),
						'pointsNo_slOne' => esc_html__( '22', 'elementor-questionaire' ),
					],
				],
				'title_field' => '{{{ questions_slOne }}}',
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'content_sectionTwo',
			[
				'label' => esc_html__( 'Questionaire Slide 2', 'elementor-questionaire' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
        $repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'questions_slTwo', [
				'label' => __( 'Question', 'elementor-questionaire' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
			]
		);
        $repeater->add_control(
			'pointsYes_slTwo', [
				'label' => __( 'Points (Yes)', 'elementor-questionaire' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
			]
		);
        $repeater->add_control(
			'pointsNo_slTwo', [
				'label' => __( 'Points (No)', 'elementor-questionaire' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
			]
		);
		
		$this->add_control(
			'questions_list_slTwo',
			[
				'label' => __( 'Add Questions', 'elementor-questionaire' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
                'default' => [
					[
						'questions_slTwo' => esc_html__( 'Is your body mass index over 35?', 'elementor-questionaire' ),
						'pointsYes_slTwo' => esc_html__( '22', 'elementor-questionaire' ),
						'pointsNo_slTwo' => esc_html__( '15', 'elementor-questionaire' ),
					],
					[
						'questions_slTwo' => esc_html__( 'Are you over 50 years old?', 'elementor-questionaire' ),
						'pointsYes_slTwo' => esc_html__( '31', 'elementor-questionaire' ),
						'pointsNo_slTwo' => esc_html__( '23', 'elementor-questionaire' ),
					],
					[
						'questions_slTwo' => esc_html__( 'Is your neck circumference over 40cm?', 'elementor-questionaire' ),
						'pointsYes_slTwo' => esc_html__( '33', 'elementor-questionaire' ),
						'pointsNo_slTwo' => esc_html__( '93', 'elementor-questionaire' ),
					],
					[
						'questions_slTwo' => esc_html__( 'Are you male (biological)?', 'elementor-questionaire' ),
						'pointsYes_slTwo' => esc_html__( '55', 'elementor-questionaire' ),
						'pointsNo_slTwo' => esc_html__( '12', 'elementor-questionaire' ),
					],
				],
				'title_field' => '{{{ questions_slTwo }}}',
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'content_sectionThree',
			[
				'label' => esc_html__( 'Questionaire Slide 3', 'elementor-questionaire' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'questions_slThree', [
				'label' => __( 'Heading Text', 'elementor-questionaire' ),
				'default' => esc_html__( 'Total Points:', 'elementor-questionaire' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
			]
		);
		$this->add_control(
			'item_description_slThree',
			[
				'label' => esc_html__( 'Description', 'elementor-questionaire' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => __( '<p>
				Teste dich mithilfe des STOP-BANG-Tests innerhalb von 1 Minute auf die Risiken einer potenziellen Apnoe
				</p>', 'elementor-questionaire' ),
				'placeholder' => esc_html__( 'Type your description here', 'elementor-questionaire' ),
			]
		);
		
		$this->end_controls_section();

		$this->start_controls_section(
			'questionaire_style_section',
			[
				'label' => __( 'Style', 'elementor-questionaire' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		
		
		$this->add_control(
			'name_text_heading',
			[
				'label' => __( 'Colors', 'elementor-questionaire' ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);
		
		$this->add_control(
			'primary_color',
			[
				'label' => __( 'Primary Color', 'elementor-questionaire' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#000000',
				'selectors' => [
					'{{WRAPPER}} .questionaire .slide p' => 'color: {{VALUE}}',
					'{{WRAPPER}} .questionaire h2' => 'color: {{VALUE}}',
					'{{WRAPPER}} .questionaire .slide label' => 'color: {{VALUE}}',
					'{{WRAPPER}} .questionaire span' => 'color: {{VALUE}}',
					'{{WRAPPER}} .questionaire .topRow .middle' => 'background-color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'secondary_color',
			[
				'label' => __( 'Secondary Color', 'elementor-questionaire' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#080c84',
				'selectors' => [
					'{{WRAPPER}} .questionaire .topRow .filled' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} .questionaire .slide button' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} .questionaire .slide .totalScores' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} .questionaire .topRow .number' => 'border-color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'foreground_color',
			[
				'label' => __( 'Foreground Color', 'elementor-questionaire' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#ffffff',
				'selectors' => [
					'{{WRAPPER}} .questionaire .topRow .filled' => 'color: {{VALUE}}',
					'{{WRAPPER}} .questionaire .slide button' => 'color: {{VALUE}}',
					'{{WRAPPER}} .questionaire .slide .Scores' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->add_control(
			'typo_text_heading',
			[
				'label' => __( 'Typography', 'elementor-questionaire' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'question_heading',
				'label' => __( 'Questions Heading Typography', 'elementor-questionaire' ),
                'label_block' => true,
				'selector' => '{{WRAPPER}} .questionaire .slide p',
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'question_options',
				'label' => __( 'Options Typography', 'elementor-questionaire' ),
                'label_block' => true,
				'selector' => '{{WRAPPER}} .questionaire .slide label',
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'buttons_options',
				'label' => __( 'Buttons Typography', 'elementor-questionaire' ),
                'label_block' => true,
				'selector' => '{{WRAPPER}} .questionaire .slide button',
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'othere_options',
				'label' => __( 'General Text Typography', 'elementor-questionaire' ),
                'label_block' => true,
				'selector' => '{{WRAPPER}} .questionaire .topRow span',
			]
		);
		
		
		$this->end_controls_section();

	}

	/**
	 * Render company widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {
		$settings = $this->get_settings_for_display();
        function random_strings($length_of_string)
        {
        
            // String of all alphanumeric character
            $str_result = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        
            // Shuffle the $str_result and returns substring
            // of specified length
            return substr(str_shuffle($str_result),
                            0, $length_of_string);
        }
		
        ?>
        <style>
			.questionaire {
			padding: 40px 20px;
			background-color: white;
			border-radius: 4px;
			max-width: 500px;
			width: 100%;
			margin: auto;
			}
			input[type="radio"] {
				transform: scale(1.5);
			}
			.questionaire .d-none {
			display: none !important;
			}
			.questionaire .topRow {
				margin-bottom: 30px;
			display: -webkit-box;
			display: -ms-flexbox;
			display: flex;
			-webkit-box-pack: justify;
				-ms-flex-pack: justify;
					justify-content: space-between;
			-webkit-box-align: center;
				-ms-flex-align: center;
					align-items: center;
			}
			.questionaire h2 {
				margin: 0 0 30px 0;
			}
			.questionaire .topRow .number {
			display: -webkit-box;
			display: -ms-flexbox;
			display: flex;
			-webkit-box-pack: center;
				-ms-flex-pack: center;
					justify-content: center;
			-webkit-box-align: center;
				-ms-flex-align: center;
					align-items: center;
			width: 30px;
			height: 30px;
			border-radius: 50%;
			border: 1px solid #464fcb;
			margin-bottom: 10px;
			}
			.questionaire .topRow .filled {
			background-color: #464fcb;
			color: white;
			}
			.questionaire .topRow span {
			font-size: 13px;
			}
			.questionaire .topRow .middle {
			width: 100%;
			height: 1px;
			background-color: black;
			position: relative;
			top: -17px;
			}
			.questionaire .topRow .left {
			margin-right: 10px;
			}
			.questionaire .topRow .right {
			margin-left: 10px;
			}
			.questionaire .slide p {
			font-size: 18px;
			font-weight: 600;
			margin: 10px 0 5px;
			}
			.questionaire .slide .option {
			margin-bottom: 15px;
			}
			.questionaire .slide .choice {
			display: inline-block;
			margin-right: 10px;
			}
			.questionaire .slide .actions {
			margin-top: 40px;
			}
			.questionaire .slide button {
			background-color: #080c84;
			color: white;
			padding: 10px 60px;
			border-radius: 4px;
			outline: none;
			border: none;
			cursor: pointer;
			}
			.questionaire .slide .totalScores {
			width: 100px;
			height: 100px;
			background: #080c84;
			border-radius: 50%;
			display: -webkit-box;
			display: -ms-flexbox;
			display: flex;
			-webkit-box-align: center;
				-ms-flex-align: center;
					align-items: center;
			-webkit-box-pack: center;
				-ms-flex-pack: center;
					justify-content: center;
			font-size: 25px;
			font-weight: bold;
			color: white;
			}
			.questionaire .slide .Scores {
				font-size: 25px;
				font-weight: bold;
				color: white;
				}
			.questionaire .lds-roller {
			display: inline-block;
			position: relative;
			width: 80px;
			height: 80px;
			}
			.questionaire .lds-roller div {
			-webkit-animation: lds-roller 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
					animation: lds-roller 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
			-webkit-transform-origin: 40px 40px;
					transform-origin: 40px 40px;
			}
			.questionaire .lds-roller div:after {
			content: " ";
			display: block;
			position: absolute;
			width: 7px;
			height: 7px;
			border-radius: 50%;
			background: #fff;
			margin: -4px 0 0 -4px;
			}
			.questionaire .lds-roller div:nth-child(1) {
			-webkit-animation-delay: -0.036s;
					animation-delay: -0.036s;
			}
			.questionaire .lds-roller div:nth-child(1):after {
			top: 63px;
			left: 63px;
			}
			.questionaire .lds-roller div:nth-child(2) {
			-webkit-animation-delay: -0.072s;
					animation-delay: -0.072s;
			}
			.questionaire .lds-roller div:nth-child(2):after {
			top: 68px;
			left: 56px;
			}
			.questionaire .lds-roller div:nth-child(3) {
			-webkit-animation-delay: -0.108s;
					animation-delay: -0.108s;
			}
			.questionaire .lds-roller div:nth-child(3):after {
			top: 71px;
			left: 48px;
			}
			.questionaire .lds-roller div:nth-child(4) {
			-webkit-animation-delay: -0.144s;
					animation-delay: -0.144s;
			}
			.questionaire .lds-roller div:nth-child(4):after {
			top: 72px;
			left: 40px;
			}
			.questionaire .lds-roller div:nth-child(5) {
			-webkit-animation-delay: -0.18s;
					animation-delay: -0.18s;
			}
			.questionaire .lds-roller div:nth-child(5):after {
			top: 71px;
			left: 32px;
			}
			.questionaire .lds-roller div:nth-child(6) {
			-webkit-animation-delay: -0.216s;
					animation-delay: -0.216s;
			}
			.questionaire .lds-roller div:nth-child(6):after {
			top: 68px;
			left: 24px;
			}
			.questionaire .lds-roller div:nth-child(7) {
			-webkit-animation-delay: -0.252s;
					animation-delay: -0.252s;
			}
			.questionaire .lds-roller div:nth-child(7):after {
			top: 63px;
			left: 17px;
			}
			.questionaire .lds-roller div:nth-child(8) {
			-webkit-animation-delay: -0.288s;
					animation-delay: -0.288s;
			}
			.questionaire .lds-roller div:nth-child(8):after {
			top: 56px;
			left: 12px;
			}
			@-webkit-keyframes lds-roller {
			0% {
				-webkit-transform: rotate(0deg);
						transform: rotate(0deg);
			}
			100% {
				-webkit-transform: rotate(360deg);
						transform: rotate(360deg);
			}
			}
			@keyframes lds-roller {
			0% {
				-webkit-transform: rotate(0deg);
						transform: rotate(0deg);
			}
			100% {
				-webkit-transform: rotate(360deg);
						transform: rotate(360deg);
			}
			}
        </style>
        <div class="questionaire">
        <div class="topRow">
            <div class="left">
            <span class="number">1</span>
            <span>STOP</span>
            </div>
            <div class="middle"></div>
            <div class="right">
            <span class="number">2</span>
            <span>BANG</span>
            </div>
        </div>
        <div class="slideOne slide">
            <?php if ( $settings['questions_list_slOne'] ) { 
                foreach (  $settings['questions_list_slOne'] as $item ) { 
                    $random = random_strings(6);
                    ?>
                    <div class="option">
                        <p><?php echo $item['questions_slOne']; ?></p>
                        <div class="choice">
                            <input type="radio" id="<?php echo $random; ?>" name="<?php echo $random; ?>" value="<?php echo $item['pointsYes_slOne']; ?>">
                            <label for="<?php echo $random; ?>">Yes</label>
                        </div>
                        <div class="choice">
                            <input type="radio" id="<?php echo $random; ?>" name="<?php echo $random; ?>" value="<?php echo $item['pointsNo_slOne']; ?>">
                            <label for="<?php echo $random; ?>">No</label>
                        </div>
                    </div>
                <?php } 
            } ?>
            <div class="actions">
            <button onclick="sildeOne()" >Further</button>
            </div>
        </div>
        <div class="slideTwo slide d-none">
            <?php if ( $settings['questions_list_slTwo'] ) { 
                foreach (  $settings['questions_list_slTwo'] as $item ) { 
                    $random = random_strings(7);
                    ?>
                    <div class="option">
                        <p><?php echo $item['questions_slTwo']; ?></p>
                        <div class="choice">
                            <input type="radio" id="<?php echo $random; ?>" name="<?php echo $random; ?>" value="<?php echo $item['pointsYes_slTwo']; ?>">
                            <label for="<?php echo $random; ?>">Yes</label>
                        </div>
                        <div class="choice">
                            <input type="radio" id="<?php echo $random; ?>" name="<?php echo $random; ?>" value="<?php echo $item['pointsNo_slTwo']; ?>">
                            <label for="<?php echo $random; ?>">No</label>
                        </div>
                    </div>
                <?php } 
            } ?>
            <div class="actions">
            <button onclick="sildeReturn()" >Return</button>
            <button onclick="sildeTwo()" >Evaluate</button>
            </div>
        </div>
		<div class="slideThree slide results d-none">
			<h2><?php echo $settings['questions_slThree']; ?></h2>
			<div class="totalScores">
			<div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
			<div class="Scores"></div>
			</div>
			<?php echo $settings['item_description_slThree']; ?>
			<div class="actions">
			<button onclick="sildeReturnTwo()" >Return</button>
			</div>
		</div>
        </div>
        <script>
            function sildeOne(){
                document.querySelector(".questionaire .slideOne").classList.add("d-none");
                document.querySelector(".questionaire .topRow .left .number").classList.add("filled");
                document.querySelector(".questionaire .slideTwo").classList.remove("d-none");
            ;}
            function sildeReturn(){
                document.querySelector(".questionaire .slideOne").classList.remove("d-none");
                document.querySelector(".questionaire .topRow .left .number").classList.remove("filled");
                document.querySelector(".questionaire .slideTwo").classList.add("d-none");

            }
			function sildeTwo(){
				document.querySelector(".questionaire .topRow .right .number").classList.add("filled");
				document.querySelector(".questionaire .slideTwo").classList.add("d-none");
				document.querySelector(".questionaire .slideThree").classList.remove("d-none");

				// Get Values of Slide One
				score = 0;
				document.querySelectorAll(".questionaire .choice input").forEach(function(input){
					if(input.checked){
						score += parseInt(input.value);  
					}
				})
				console.log(score);
				var delayInMilliseconds = 3000; //3 second
				setTimeout(function() {
				document.querySelector(".questionaire .lds-roller").classList.add("d-none");
				document.querySelector(".questionaire .slideThree .Scores").innerHTML = score;
				}, delayInMilliseconds);
			}
			function sildeReturnTwo(){
				document.querySelector(".questionaire .slideThree").classList.add("d-none");
				document.querySelector(".questionaire .slideTwo").classList.remove("d-none");
				document.querySelector(".questionaire .lds-roller").classList.remove("d-none");
				document.querySelector(".questionaire .slideThree .Scores").innerHTML = '';

			}
        </script>
        <?php
	}


}