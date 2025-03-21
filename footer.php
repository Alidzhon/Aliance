<section class="cta">
               <div class="bg-grey section-cta">
                    <img src="img/cta.png" alt="call to action" class="cta-image">
                    <div class="cta-from-wrapper container">
                         <form action="handler.php" method="POST" class="cta-form">
                              <h2 class="section-title cta-form-title">Хотите сотрудничать?</h2>
                              <p class="cta-form-text">Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!</p>
                              <div class="input-group-wrapper">
                                  <div class="input-group">
                                     <input id="user-name" 
                                            type="text" 
                                            class="input" 
                                            name="username"
                                            placeholder=" "
                                            maxlength="100"
                                            required
                                            />
                                     <label for="user-name" class="input-group-label">Имя</label>
                                  </div>
                                  <div class="input-group">
                                    <input id="user-phone" 
                                           type="tel"
                                           name="userphone" 
                                           class="input phone-mask" 
                                           placeholder=" "
                                           maxlength="30"
                                           required
                                           />
                                    <label for="user-phone" class="input-group-label">Номер телефона</label>
                                 </div>
                              </div>
                              <div class="cta-form-footer">
                                   <button type="submit" class="button cta-form-button">Отправить заявку</button>
                                   <div class="notify">
                                    <svg  width="14" height="14" class="notify-icon">
                                        <use href="img/icon/sprite.svg#shield"></use>
                                    </svg>
                                       <p class="notify-text">
                                        Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную конфиденциальность информации!
                                       </p>
                                   </div>
                              </div>
                              <!-- /.cta-form-footer -->
                         </form>
                    </div>
               </div>  
       </section>

       <footer class="footer">
               <div class="container">
                    <div class="footer-top">
                        <svg class="logo-svg footer-logo">
                            <use href="img/icon/sprite.svg#logo"></use>
                        </svg>
                        <a href="tel:+79996861014" class="footer-phone">+7 (499) 686-10-14</a>
                        <div class="footer-info">
                            <svg class="location-svg" width="12" height="16.0156">
                                <use href="img/icon/sprite.svg#location"></use>
                            </svg>
                            <address class="footer-info-address">
                                г. Мосвка, Холодильный пер. 4к1с8
                            </address>
                          </div>
                          <div class="footer-info footer-info-block">
                            <svg class="footer-social-icon" width="16" height="12">
                                <use href="img/icon/sprite.svg#email"></use>
                            </svg>
                            <a href="mailto:a.dragunov@tdaliance.ru" class="footer-info-email">
                                a.dragunov@tdaliance.ru
                            </a>
                          </div>
                          <div class="footer-social">
                               <a href="#" class="footer-social-link">
                                   <svg class="footer-social-icon" width="24" height="24">
                                       <use href="img/icon/sprite.svg#vk"></use>
                                   </svg>
                               </a>
                               <a href="#" class="footer-social-link">
                                   <svg class="footer-social-icon" width="24" height="24">
                                       <use href="img/icon/sprite.svg#inst"></use>
                                   </svg>
                               </a>
                          </div>
                          <!-- /.footer-social -->
                    </div>
                    <!-- /.footer-top -->                
               </div>     
               <hr color="#ebebf0" class="footer-seporator">
               <div class="container">
                <div class="footer-bottom">
                    <div class="footer-menu-wrapper">
                    <h2 class="footer-menu-title">Контрактное производство</h2>
                        <ul class="footer-menu-list footer-menu-column-2">
                        <li class="footer-menu-item">
                            <a href="#" class="footer-memu-link">Автомобильная химия<a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-memu-link">Бытовая химия</a>
                        </li> 
                        <li class="footer-menu-item">
                            <a href="#" class="footer-memu-link">Дезинфицирующие средства</a>
                        </li> 
                        <li class="footer-menu-item">
                            <a href="#" class="footer-memu-link">Пищевые аэрозоли</a>
                        </li> 
                        <li class="footer-menu-item">
                            <a href="#" class="footer-memu-link">Косметическая продукция</a>
                        </li> 
                        <li class="footer-menu-item">
                            <a href="#" class="footer-memu-link">Краски аэрозольные</a>
                        </li>  
                    </ul>  
                </div> 
                <div class="footer-menu-wrapper">
                    <h2 class="footer-menu-title">Собственные марки</h2>
                    <ul class="footer-menu-list">
                        <li class="footer-menu-item">
                            <a href="#" class="footer-memu-link">Автохимия AG-Tech<a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-memu-link">Автохимия AP</a>
                        </li> 
                    </ul>  
                </div> 
                <div class="footer-menu-wrapper">
                    <ul class="footer-menu-list">
                        <li class="footer-menu-item">
                            <a href="#" class="footer-memu-link footer-memu-link-bold">О компании<a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-memu-link footer-memu-link-bold">Новости</a>
                        </li> 
                        <li class="footer-menu-item">
                            <a href="#" class="footer-memu-link footer-memu-link-bold">Контакты</a>
                        </li> 
                    </ul>  
                </div> 
            </div> 
            </div>
            <hr color="#ebebf0" class="footer-seporator">
            <div class="container">
                  <div class="footer-wrapper">
                    <div class="footer-legal">
                        <p class="footer-copyright">
                            &copy; <?php echo date('d.m.Y')?> «Aliance Production». Все права защищены.
                        </p>
                        <a href="#" class="footer-policy">Политики конфиденциальности</a>
                   </div>
                   <div class="footer-author">
                        <span class="made-in">Сделано в </span>
                        <span class="footer-develop">Дизайн и разработка:</span>
                        <svg  width="52" height="11">
                             <use href="img/icon/sprite.svg#ruso"></use>
                        </svg>
                   </div> 
                  </div>
            </div>           
    </footer>

    <div class="modal" id="feedback-modal">
          <div class="modal-dialog">
               <h2 class="modal-title">Есть вопросы?</h2>
               <a href="#" class="modal-close" data-toggle="modal" data-target="#feedback-modal">
                     <svg class="close-icon"  width="24" height="24">
                         <use href="img/icon/sprite.svg#close"></use>
                    </svg>
               </a>
               <p class="modal-text">
                Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!
               </p>
               <form action="handler.php" method="POST" class="modal-form">
                <div class="input-group-wrapper input-group-vertical">
                    <div class="input-group modal-input-group">
                       <input 
                       id="modal-user-name" 
                       type="text" 
                       class="input modal-input"  
                       placeholder=" "
                       name="username">
                       <label for="modal-user-name" class="input-group-label modal-input-label">Имя</label>
                    </div>
                    <div class="input-group modal-input-group">
                      <input 
                        id="modal-user-phone" 
                        type="tel" 
                        class="input modal-input" 
                        placeholder=" "
                        name="userphone">
                      <label for="modal-user-phone" class="input-group-label modal-input-label">Номер телефона</label>
                   </div>
                </div>
                <div class="modal-form-footer">
                     <button type="submit" class="button modal-form-button">Отправить заявку</button>
                     <div class="notify">
                      <svg  width="14" height="14" class="notify-icon">
                          <use href="img/icon/sprite.svg#shield"></use>
                      </svg>
                         <p class="notify-text">
                          Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную конфиденциальность информации!
                         </p>
                     </div>
                </div>
                <!-- /.modal-form-footer -->
           </form>
          </div> 
     </div>

     <div class="modal" id="alert-modal">
          <div class="modal-dialog">
               <a href="#" class="modal-close" data-toggle="modal" data-target="#alert-modal">
                     <svg class="close-icon"  width="24" height="24">
                         <use href="img/icon/sprite.svg#close"></use>
                    </svg>
               </a>
               <svg class="thanks_illu"  width="360" height="310">
                    <use href="img/icon/sprite.svg#thanks_illu"></use>
                </svg>
               <h2 class="modal-title-alert">Спасибо за заявку!</h2>
               <p class="modal-text">
                    Наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!
               </p>
               <button type="submit" class="button modal-form-button"  data-toggle="modal" data-target="#alert-modal">Вернуться на главную</button>
          </div> 
     </div>



<script src="js/swiper-bundle.min.js"></script> 
<script src="js/just-validate.production.min.js"></script>
<script src="js/main.js"></script>