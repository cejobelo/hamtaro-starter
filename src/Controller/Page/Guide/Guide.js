import { AbstractPage } from 'hamtaro.js';

/**
 * Guide page.
 *
 * @author Phil'dy Jocelyn Belcou <pj.belcou@gmail.com>
 */
export default class Guide extends AbstractPage {
  /**
   * @inheritDoc
   * @see AbstractPage.getCtrl
   */
  getCtrl() {
    return 'Guide';
  }
}