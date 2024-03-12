<?php foreach ($questoes as $questao) : ?>
    <div class="quest">
        <div class="quest_num">
            <span>Questão</span>
            <h4><?php echo $questao['questao_id']; ?></h4>
        </div>
        <p class="text_quest"><?php echo $questao['texto_questao']; ?></p>
        <p><?php echo $questao['enunciado']; ?></p>
        <div class="alters">
            <?php foreach ($questao['alternativas'] as $alternativa) : ?>
                <div class="alter">
                    <label for="input-<?php echo $alternativa['letra_alternativa']; ?>"><?php echo $alternativa['letra_alternativa']; ?></label>
                    <input type="radio" name="resposta_<?php echo $questao['questao_id']; ?>" id="input-<?php echo $alternativa['letra_alternativa']; ?>" value="<?php echo $alternativa['alternativa_id']; ?>">
                    <span><?php echo $alternativa['texto_alternativa']; ?></span>
                </div>
            <?php endforeach; ?>
        </div>
        <br>
        <hr><br>
    </div>
<?php endforeach; ?>